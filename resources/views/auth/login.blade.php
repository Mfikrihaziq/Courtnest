<x-guest-layout>
  <div class="min-h-screen font-sans selection:bg-green-500 bg-[#F3F4F6]">
    <div class="min-h-screen flex">

      <!-- LEFT: LOGIN FORM (SaaS style / no box) -->
<div class="w-full lg:w-1/2 flex flex-col justify-center items-center py-16 px-8 bg-[#F3F4F6]">
  <div class="w-full max-w-lg">

    <!-- Title -->
    <div class="mb-10 text-center">
      <h2 class="text-5xl font-extrabold tracking-tight text-[#0b1020]">
        Welcome Back!
      </h2>
      <p class="mt-2 text-lg text-slate-600 font-medium">
        Sign in to continue.
      </p>
    </div>

    <!-- Validation -->
    <x-validation-errors class="mb-6" />

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf

      <!-- Email -->
      <div>
        <label class="block text-sm font-semibold text-slate-600 mb-2">
          Email address
        </label>
        <input
          type="email"
          name="email"
          value="{{ old('email') }}"
          required
          autofocus
          class="w-full rounded-2xl bg-white border border-slate-300 px-5 py-4 text-[#0b1020]
                 placeholder:text-slate-400 shadow-sm
                 focus:outline-none focus:ring-4 focus:ring-[#22C55E]/20 focus:border-[#22C55E]"
          placeholder="Enter your email"
        >
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-semibold text-slate-600 mb-2">
          Password
        </label>
        <input
          type="password"
          name="password"
          required
          autocomplete="current-password"
          class="w-full rounded-2xl bg-white border border-slate-300 px-5 py-4 text-[#0b1020]
                 placeholder:text-slate-400 shadow-sm
                 focus:outline-none focus:ring-4 focus:ring-[#22C55E]/20 focus:border-[#22C55E]"
          placeholder="Enter your password"
        >
      </div>

      <!-- Remember + Forgot -->
      <div class="flex items-center justify-between pt-1">
        <label class="flex items-center gap-2">
          <x-checkbox
            name="remember"
            class="rounded border-slate-400 text-[#22C55E] focus:ring-[#22C55E]"
          />
          <span class="text-sm text-slate-600">
            Remember me
          </span>
        </label>

        @if (Route::has('password.request'))
          <a
            href="{{ route('password.request') }}"
            class="text-sm font-semibold text-[#22C55E] hover:text-[#16a34a] transition"
          >
            Forgot password?
          </a>
        @endif
      </div>

      <!-- Button -->
      <button
        type="submit"
        class="w-full rounded-full py-4 text-white font-bold text-lg
               bg-gradient-to-r from-[#0b1a44] via-[#101f55] to-[#0b1a44]
               hover:brightness-110 transition
               shadow-[0_18px_40px_rgba(11,26,68,0.25)]"
      >
        Log in
      </button>

      <!-- Create account -->
      <p class="text-center text-sm text-slate-600 pt-3">
        Don’t have an account yet?
        <a
          href="{{ route('register') }}"
          class="font-semibold text-[#0b1a44] hover:underline"
        >
          Create an account
        </a>
      </p>

    </form>
  </div>
</div>


     <!-- RIGHT: ILLUSTRATION -->
<div class="hidden lg:flex w-1/2 relative overflow-hidden
     bg-gradient-to-br from-[#DDE9F8] via-[#C9DCF4] to-[#B7D0EE]">

  <!-- soft background glows -->
  <div class="absolute -top-32 -right-32 w-96 h-96
              bg-blue-500/25 rounded-full blur-[140px]"></div>

  <div class="absolute -bottom-32 -left-32 w-96 h-96
              bg-green-500/20 rounded-full blur-[140px]"></div>

  <div class="relative z-10 w-full flex flex-col items-center justify-center
              px-12 py-10 text-[#0b1c2d]">

    <!-- Brand -->
     <div class="mb-3 text-center">
            <h2 class="text-5xl font-black italic uppercase tracking-tighter">
              <span class="text-[#0b1320]">Court</span><span class="text-[#22C55E]">Nest</span>
            </h2>
          </div>

    <!-- Tagline -->
    <p class="text-slate-700 text-base mb-2 text-center max-w-md">
      Book your courts instantly and play without waiting.
    </p>

    <!-- Illustration -->
    <img
      src="{{ asset('assets/img/courtlogin.png') }}"
      alt="CourtNest Login Illustration"
      class="w-[72%] max-w-[480px]
             drop-shadow-[0_28px_55px_rgba(0,0,0,0.28)]
             select-none mb-2"
    />

    <!-- Footer text (clear & readable) -->
    <p class="text-slate-800 text-sm tracking-wide font-semibold">
      Fast booking • Secure payment • Smooth check-in
    </p>

  </div>
</div>
  </div>
</div>


      </div>

    </div>
  </div>
</x-guest-layout>
