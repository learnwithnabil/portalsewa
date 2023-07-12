<x-app-layout title="{{ trans('roles.title.index') }}" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 lg:text-2xl">
                {{ trans('roles.title.sub_index') }}
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
                <li>{{ trans('roles.title.sub_index') }}</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- GridJS Advanced Example -->
            <div class="card pb-4">
                <div class="my-3 flex h-8 items-center justify-end px-4 sm:px-5">
                    <div class="inline-space mt-5 flex flex-wrap items-end">
                        <a href="{{ route("roles.create") }}" class="btn rounded-md h-9 px-5 text-xs+ space-x-2 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
                            <span>{{ trans('roles.title.create') }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </a>
                        {{-- <button class="btn rounded-md h-9 px-4 text-xs+ space-x-2 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
                            <span>{{ trans('roles.title.print') }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                            </svg>
                        </button> --}}
                    </div>
                </div>
                <div class="mt-5">
                    <div x-data="initDataRole"></div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function initDataRole() {
        return {
            table: null,
            config: {
                columns: [
                    {
                        id:"id",
                        name:"ID",
                        width:"5%",
                    },
                    {
                        id: "name",
                        name: "Name",
                    },
                    {
                        id: "guard_name",
                        name: "Guard Name",
                    },
                    {
                        name: "Actions",
                        sort: false,
                        width:"10%",
                        formatter: (_, row) =>
                            Gridjs.html(
                                `<div class="flex justify-center space-x-2">
                                    @can('role_detail')
                                        <a href='roles/${row.cells[0].data}' class="btn h-8 w-8 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @endcan
                                    @can('role_update')
                                        <a href='roles/${row.cells[0].data}/edit' class="btn h-8 w-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    @endcan
                                    @can('role_delete')
                                        <form class="d-inline" id="formDelete-${row.cells[1].data}" action="{{ url('roles/${row.cells[0].data}') }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit alert-title="{{ trans('roles.alert.delete.title') }}"
                                                alert-text="{{ trans('roles.alert.delete.message.confirm') }}"
                                                alert-btn-cancel="{{ trans('roles.button.cancel.value') }}" id="btn-submit-${row.cells[1].data}"
                                                alert-btn-confirm="{{ trans('roles.button.delete.value') }}" class="btn h-8 w-8 p-0 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </div>`
                            ),
                    },
                ],
                data: {!! json_encode($roles->toArray()) !!},
                sort: true,
                search: true,
                pagination: {
                    enabled: true,
                    limit: 10,
                }
            },
            init() {
                this.table = new Gridjs.Grid(this.config).render(this.$root);
            },
        };
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                // Event Delete Form
                @foreach ($roles as $role)
                    $(document).on('click', `#btn-submit-{{ $role->name }}`, function(e) {
                        event.preventDefault();
                        Swal.fire({
                            title: $(this).attr('alert-title'),
                            text: $(this).attr('alert-text'),
                            icon: 'warning',
                            allowOutsideClick: false,
                            showCancelButton: true,
                            cancelButtonText: $(this).attr('alert-btn-cancel'),
                            reverseButtons: true,
                            confirmButtonText: $(this).attr('alert-btn-confirm'),
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $(`#formDelete-{{ $role->name }}`).submit();
                            }
                        });
                    })
                @endforeach
            })
        </script>
</x-app-layout>
