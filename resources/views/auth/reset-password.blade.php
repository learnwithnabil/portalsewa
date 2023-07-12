<x-base-layout title="Reset Password">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[26rem] p-4 sm:px-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16 " src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600">
                        Reset Password
                    </h2>
                    <p class="text-slate-400">
                        Please reset password to continue
                    </p>
                </div>
            </div>
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                     <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <label class="block" for="email">
                    <span>Email:</span>
                    <span class="relative mt-1.5 flex">
                        <input
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary"
                            placeholder="Enter Email" type="email"
                            name="email" id="email"
                            required autocomplete="email" />
                            <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </span>
                        @error('email')
                            <span class="text-tiny+ text-error">{{ $errors->first('email') }}</span>
                        @enderror
                </label>

                <label class="block" for="password">
                    <span>Password:</span>
                    <span class="relative mt-1.5 flex">
                        <input
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary"
                            placeholder="Enter Password" type="password"
                            name="password" id="password"
                            required autocomplete="password" />
                            <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </span>
                        @error('password')
                            <span class="text-tiny+ text-error">{{ $errors->first('password') }}</span>
                        @enderror
                </label>
                <label class="block" for="password_confirmation">
                    <span>Password Confirmation:</span>
                    <span class="relative mt-1.5 flex">
                        <input
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary"
                            placeholder="Enter Password Confirmation" type="password"
                            name="password_confirmation" id="password_confirmation"
                            required autocomplete="password_confirmation" />
                            <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </span>
                        @error('password_confirmation')
                            <span class="text-tiny+ text-error">{{ $errors->first('password_confirmation') }}</span>
                        @enderror
                </label>

                <button type="submit"
                    class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
                    Reset Password
                </button>
                </form>

            </div>
            <div class="mt-8 flex justify-center text-xs text-slate-400">
                <a href="#">Privacy Notice</a>
                <div class="mx-3 my-1 w-px bg-slate-200"></div>
                <a href="#">Term of service</a>
            </div>
        </div>
    </main>
</x-base-layout>

