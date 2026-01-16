<x-guest-layout>
  <div class="min-h-screen bg-[#F3F4F6] font-sans">
    <div class="min-h-screen flex">

      <!-- LEFT: SIGN UP FORM (SaaS clean layout) -->
      <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-16 bg-[#F3F4F6]">
        <div class="w-full max-w-lg">

          <!-- Heading -->
          <div class="mb-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-[#0b1320]">
              Create account
            </h1>
            <p class="mt-2 text-lg text-slate-600 font-medium">
              Fill in your details to get started.
            </p>
          </div>

          <x-validation-errors class="mb-6" />

          <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">
                Name
              </label>
              <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                placeholder="Enter full name"
                class="w-full rounded-2xl border border-slate-300 bg-white px-5 py-4 text-slate-900
                       placeholder:text-slate-400 shadow-sm
                       focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400"
              >
            </div>

            <!-- Phone Number -->
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">
                Phone number
              </label>
              <input
                type="text"
                name="phone_number"
                value="{{ old('phone_number') }}"
                required
                placeholder="012-3456789"
                class="w-full rounded-2xl border border-slate-300 bg-white px-5 py-4 text-slate-900
                       placeholder:text-slate-400 shadow-sm
                       focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400"
              >
            </div>

            <!-- Email -->
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">
                Email address
              </label>
              <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                placeholder="your@email.com"
                class="w-full rounded-2xl border border-slate-300 bg-white px-5 py-4 text-slate-900
                       placeholder:text-slate-400 shadow-sm
                       focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400"
              >
            </div>

            <!-- Password + Confirm Password -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                  Password
                </label>
                <input
                  type="password"
                  name="password"
                  required
                  placeholder="••••••••"
                  class="w-full rounded-2xl border border-slate-300 bg-white px-5 py-4 text-slate-900
                         placeholder:text-slate-400 shadow-sm
                         focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400"
                >
              </div>

              <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                  Confirm password
                </label>
                <input
                  type="password"
                  name="password_confirmation"
                  required
                  placeholder="••••••••"
                  class="w-full rounded-2xl border border-slate-300 bg-white px-5 py-4 text-slate-900
                         placeholder:text-slate-400 shadow-sm
                         focus:outline-none focus:ring-4 focus:ring-green-200 focus:border-green-400"
                >
              </div>
            </div>

            <!-- Button -->
            <button
              type="submit"
              class="w-full mt-2 rounded-full bg-[#0b1a3a] px-6 py-4 text-white font-semibold
                     shadow-lg shadow-slate-400/30
                     hover:bg-[#081432] transition"
            >
              Register
            </button>

            <!-- Already a member -->
            <p class="text-center text-sm text-slate-600 pt-2">
              Already a member?
              <a href="{{ route('login') }}" class="font-semibold text-[#0b1a3a] underline underline-offset-4 hover:opacity-80">
                Sign In
              </a>
            </p>

          </form>
        </div>
      </div>

    <!-- RIGHT: ILLUSTRATION (match LOGIN UI) -->
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

    <!-- Tagline (signup version text, but same styling) -->
    <p class="text-slate-700 text-base mb-2 text-center max-w-md">
      Create your account and start booking courts in minutes.
    </p>

    <!-- Illustration -->
    <img
      src="{{ asset('assets/img/courtlogin.png') }}"
      alt="CourtNest Illustration"
      class="w-[72%] max-w-[480px]
             drop-shadow-[0_28px_55px_rgba(0,0,0,0.28)]
             select-none mb-2"
    />

    <!-- Footer text -->
    <p class="text-slate-800 text-sm tracking-wide font-semibold">
      Fast booking • Secure payment • Smooth check-in
    </p>

  </div>
</div>


    </div>
  </div>
</x-guest-layout>
