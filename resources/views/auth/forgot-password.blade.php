<x-guest-layout>
    <div class="min-h-screen w-full bg-gray-50 flex items-center justify-center px-6">

        <div class="w-full max-w-xl">

            {{-- Title --}}
            <div class="mb-10 text-center">
                <h1 class="text-5xl font-extrabold text-slate-900 leading-tight">
                    Reset Password
                </h1>
                <p class="mt-3 text-slate-500 text-lg">
                    Enter your email and we’ll send you a reset link.
                </p>
            </div>

            {{-- Status message --}}
            @if (session('status'))
                <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-700 text-center">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Errors --}}
            <x-validation-errors class="mb-6" />

            {{-- Card --}}
            <div class="rounded-3xl bg-white p-8 shadow-[0_20px_60px_rgba(15,23,42,0.10)] border border-slate-100">
                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700">
                            Email address
                        </label>

                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="Enter your email"
                            class="mt-2 block w-full rounded-2xl border border-slate-200 bg-white px-5 py-4
                                   text-slate-900 placeholder:text-slate-400 shadow-sm outline-none transition
                                   focus:border-emerald-400 focus:ring-4 focus:ring-emerald-200/50"
                        />
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-2xl bg-gradient-to-r from-slate-900 to-slate-800 py-4
                               font-extrabold text-white transition hover:opacity-95 active:scale-[0.99]
                               shadow-[0_18px_40px_rgba(15,23,42,0.25)]"
                    >
                        Email Reset Link
                    </button>

                    <div class="flex items-center justify-between pt-2 text-sm">
                        <a href="{{ route('login') }}"
                           class="font-semibold text-emerald-600 hover:text-emerald-700">
                            Back to login
                        </a>

                        <a href="{{ route('register') }}"
                           class="text-slate-500 hover:text-slate-700">
                            Create an account
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
