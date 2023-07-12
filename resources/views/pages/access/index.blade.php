<x-app-layout title="Application List" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-12 text-center">
            <div class="avatar h-16 w-16">
                <div class="is-initial rounded-full bg-primary text-white">
                    {{-- <i class="fa-duotone fa-gear-complex text-2xl"></i> --}}
                    {{-- <i class="fa-light fa-gear-complex"></i> --}}
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.30976 6.69267L3.98623 9.19267C3.2584 10.5675 2.89448 11.2549 2.89448 12C2.89448 12.7451 3.2584 13.4325 3.98623 14.8073L5.30976 17.3073C6.13314 18.8626 6.54483 19.6402 7.25883 20.0701C7.97282 20.5 8.85271 20.5 10.6125 20.5H13.3875C15.1473 20.5 16.0272 20.5 16.7412 20.0701C17.4552 19.6402 17.8669 18.8626 18.6902 17.3073L20.0138 14.8073C20.7416 13.4325 21.1055 12.7451 21.1055 12C21.1055 11.2549 20.7416 10.5675 20.0138 9.19268L18.6902 6.69267C17.8669 5.1374 17.4552 4.35977 16.7412 3.92988C16.0272 3.5 15.1473 3.5 13.3875 3.5H10.6125C8.85271 3.5 7.97282 3.5 7.25883 3.92988C6.54483 4.35977 6.13314 5.1374 5.30976 6.69267Z" fill="currentColor" fill-opacity="0.24"/>
                        <circle cx="12" cy="12" r="3" fill="currentColor"/>
                    </svg>
                </div>
            </div>

            <h3 class="mt-3 text-xl font-semibold text-slate-600">
                Access Setting
            </h3>
            <p class="mt-0.5 text-base">
                List of Access Setting
            </p>
        </div>
        <div class="mx-auto mt-8 grid w-full max-w-4xl grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
            <div class="card p-4 sm:p-5">
                <div class="avatar h-12 w-12">
                    <div class="is-initial rounded-full bg-info text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                            <path d="M3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12Z" fill="currentColor" fill-opacity="0.24"/>
                            <circle cx="12" cy="10" r="4" fill="currentColor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2209 18.2462C18.2791 18.3426 18.2613 18.466 18.1795 18.5432C16.5674 20.0662 14.3928 21 12 21C9.60728 21 7.43264 20.0663 5.82057 18.5433C5.73877 18.466 5.72101 18.3427 5.77918 18.2463C6.94337 16.318 9.29215 15 12.0001 15C14.7079 15 17.0567 16.3179 18.2209 18.2462Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <h2 class="mt-5 text-base font-medium tracking-wide text-slate-700 line-clamp-1">
                    Manage User
                </h2>
                <p class="mt-1">
                    Manage User
                </p>
                <div class="mt-5 pb-1">
                    <a href="{{ route('access/roles.index') }}"
                        class="border-b border-dashed border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70">View
                        Feature</a>
                </div>
            </div>
            <div class="card p-4 sm:p-5">
                <div class="avatar h-12 w-12">
                    <div class="is-initial rounded-full bg-warning text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                            <path d="M4 12C4 11.0572 4 10.5858 4.29289 10.2929C4.58579 10 5.05719 10 6 10H18C18.9428 10 19.4142 10 19.7071 10.2929C20 10.5858 20 11.0572 20 12V18.0375C20 18.4185 20 18.6091 19.9711 18.7772C19.8575 19.4381 19.4203 19.9981 18.8067 20.2685C18.6506 20.3374 18.4658 20.3836 18.0961 20.476C16.8589 20.7853 16.2403 20.9399 15.6215 21.0539C13.2273 21.4947 10.7727 21.4947 8.37847 21.0539C7.75968 20.9399 7.14108 20.7853 5.90388 20.476C5.53423 20.3836 5.34941 20.3374 5.19329 20.2685C4.5797 19.9981 4.14248 19.4381 4.0289 18.7772C4 18.6091 4 18.4185 4 18.0375V12Z" fill="currentColor" fill-opacity="0.24"/>
                            <circle cx="12" cy="15" r="2" fill="currentColor"/>
                            <path d="M12 16V18.5" stroke="currentColor" stroke-linecap="round"/>
                            <path d="M16.5 10V7C16.5 4.51472 14.4853 2.5 12 2.5V2.5C9.51472 2.5 7.5 4.51472 7.5 7V8" stroke="currentColor"/>
                            </svg>
                    </div>
                </div>
                <h2 class="mt-5 text-base font-medium tracking-wide text-slate-700 line-clamp-1">
                    Role & Permission
                </h2>
                <p class="mt-1">
                    Role & Permission
                </p>
                <div class="mt-5 pb-1">
                    <a href="{{ route('access/roles.index') }}"
                        class="border-b border-dashed border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70">View
                        Feature</a>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
