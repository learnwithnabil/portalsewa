<x-app-layout title="{{ trans('roles.title.detail') }}" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 lg:text-2xl">
                {{ trans('roles.title.sub_detail') }}
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus"
                        href="#">Home</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>{{ trans('roles.title.sub_detail') }}</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <div class="card pb-4">
                <div class="my-3 flex h-8 items-center justify-between px-4 sm:px-5">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base">
                        {{ trans('roles.title.sub_detail') }}
                    </h2>
                </div>
                <div class="mx-5">
                    <label class="block mt-3 max-w-xl" for="name">
                        <span>{{ trans('roles.form_control.input.name.label') }}:</span>
                        <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"
                          type="text" width="20px"
                          id="name" value="{{ $role->name }}" name="name" readonly
                          />
                    </label>
                    <label class="block mt-3">
                        <span>{{ trans('roles.form_control.input.permission.label') }}:</span>
                        <div class="mt-5">
                            <div class=" min-w-full overflow-x-auto">
                              <table class="w-full text-left">
                                <thead>
                                  <tr>
                                    <th width="30%" class="whitespace-nowrap rounded-l-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5">
                                        {{ trans('roles.form_control.input.permission.label') }}
                                    </th>
                                    <th width="30%" colspan="20" class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5">
                                    </th>
                                    <th width="40%" class="whitespace-nowrap rounded-r-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($authorities as $manageName => $permissions)
                                        <tr class="border-y border-transparent border-b-slate-200">
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ trans("permissions.{$manageName}") }}</td>
                                            @foreach ($permissions as $permission)
                                                <td class="whitespace-nowrap sm:px-5">
                                                    <label class="inline-flex items-center space-x-2" for="permission-{{ $permission }}">
                                                        <input {{ in_array($permission, $rolePermissions) ? 'checked' : null }} value="" id="permission-{{ $permission }}" type="checkbox" class="form-checkbox is-basic h-5 w-5 rounded-full border-slate-400/70 checked:!border-success checked:bg-success hover:!border-success focus:!border-success" disabled >
                                                        <span>{{ trans("permissions.{$permission}") }}</span>
                                                    </label>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @empty
                                        <p>
                                            <strong>
                                                {{ trans('roles.label.no_data.fetch') }}
                                            </strong>
                                        </p>
                                    @endforelse
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </label>
                    <div class="flex justify-end space-x-2 mt-5">
                        <a href="{{ route('roles.index') }}" class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80">
                            {{ trans('roles.button.back.value') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
