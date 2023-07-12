<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:role_show',   ['only' => 'index']);
        $this->middleware('permission:role_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role_update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role_detail', ['only' => 'show']);
        $this->middleware('permission:role_delete', ['only' => 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::all()->sortBy('asd');
        return view('pages.access.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.access.roles.create', [
            'authorities' => config('permission.authorities'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:60|unique:roles,name',
                'permissions' => 'required',
            ],
            [],
            $this->attributes()
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction(); // untuk transaksi 3 tabel
        // proses insert data
        try {
            $role = Role::create([
                'name' => $request->name,
            ]);
            // Memberikan Permissions
            $role->givePermissionTo($request->permissions);
            Alert::success(
                trans('roles.alert.create.title'),
                trans('roles.alert.create.message.success')
            );
            return redirect()->route('roles.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                trans('roles.alert.create.title'),
                trans('roles.alert.create.message.error', ['error' => $th->getMessage()]),
            );
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('pages.access.roles.detail', [
            'role' => $role,
            'authorities' => config('permission.authorities'),
            'rolePermissions' => $role->permissions->pluck('name')->toArray()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('pages.access.roles.edit', [
            'role' => $role,
            'authorities' => config('permission.authorities'),
            'permissionChecked' => $role->permissions->pluck('name')->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:60|unique:roles,name,' . $role->id,
                'permissions' => 'required',
            ],
            [],
            $this->attributes()
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        // proses insert data
        try {
            $role->name = $request->name;
            // Memberikan Permissions
            $role->syncPermissions($request->permissions);
            $role->save();
            Alert::success(
                trans('roles.alert.update.title'),
                trans('roles.alert.update.message.success')
            );
            return redirect()->route('roles.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                trans('roles.alert.update.title'),
                trans('roles.alert.update.message.error', ['error' => $th->getMessage()]),
            );
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (User::role($role->name)->count()) {
            Alert::warning(
                trans('roles.alert.delete.title'),
                trans('roles.alert.delete.message.warning', ['name' => $role->name]),
            );
            return redirect()->route('roles.index');
        }
        DB::beginTransaction(); // untuk transaksi 3 tabel
        // proses insert data
        try {
            $role->revokePermissionTo($role->permissions->pluck('name')->toArray());
            $role->delete();
            Alert::success(
                trans('roles.alert.delete.title'),
                trans('roles.alert.delete.message.success')
            );
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                trans('roles.alert.delete.title'),
                trans('roles.alert.delete.message.error', ['error' => $th->getMessage()]),
            );
        } finally {
            DB::commit();
            return redirect()->back();
        }
    }

    public function attributes()
    {
        return [
            'name' => trans('roles.form_control.input.name.attribute'),
            'permissions' => trans('roles.form_control.input.permission.attribute'),
        ];
    }
}
