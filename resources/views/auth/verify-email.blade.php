<x-base-layout title="Verify Email">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[26rem] p-4 sm:px-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16 " src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600">
                        Verify Email
                    </h2>
                    <p class="text-slate-400 mt-2">
                        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
                    </p>
                </div>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                <button type="submit"
                    class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
                    Resend Verification Email
                </button>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                    class="btn mt-5 w-full bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90">
                    {{ __('Log Out') }}
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

