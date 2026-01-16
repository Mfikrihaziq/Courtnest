<x-app-layout>
    <div class="flex flex-col lg:flex-row min-h-screen bg-slate-50 font-sans selection:bg-[#22C55E]/30 selection:text-[#0b1320]">

        {{-- LEFT: Profile Card --}}
        <aside class="w-full lg:w-[40%] flex flex-col justify-center px-6 sm:px-10 lg:px-14 py-12 lg:py-0">
            <div class="rounded-[32px] border border-slate-300 p-10 sm:p-12 bg-blue-50 shadow-[0_20px_60px_rgba(15,23,42,0.08)]">

                <div class="mb-8">
                    <span class="text-[13px] font-bold tracking-[0.22em] uppercase text-[#22C55E] bg-[#22C55E]/10 px-4 py-2 rounded-full">
                        Personal Information
                    </span>
                </div>

                <div class="flex items-center gap-6 mb-10">
                    <div class="relative shrink-0">
                        <div class="absolute -inset-3 bg-[#22C55E]/20 rounded-full blur-2xl"></div>
                        <div class="relative w-24 h-24 rounded-full border-4 border-white bg-white shadow-md overflow-hidden">
                            @if(auth()->check())
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=f8fafc&color=22c55e&size=200"
                                     alt="avatar"
                                     class="w-full h-full object-cover">
                            @endif
                        </div>
                    </div>

                    <div class="min-w-0">
                        <h1 class="text-3xl font-black text-slate-900 tracking-tight leading-tight break-words">
                            {{ auth()->user()->name ?? 'Guest' }}
                        </h1>
                        <p class="text-[#22C55E] font-bold text-xs uppercase tracking-widest mt-1">
                            Verified Member
                        </p>
                    </div>
                </div>

                {{-- Info blocks --}}
                <div class="mt-8 rounded-3xl bg-slate-50/60 border border-slate-200 px-6">
                    <div class="py-6 border-b border-slate-300">
                        <p class="text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                            Email Address
                        </p>
                        <p class="text-lg text-slate-800 font-semibold italic break-words">
                            {{ auth()->user()->email ?? '—' }}
                        </p>
                    </div>

                    <div class="py-6">
                        <p class="text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                            Contact Number
                        </p>
                        <p class="text-lg text-slate-800 font-semibold">
                            {{ auth()->user()->phone_number ?? '—' }}
                        </p>
                    </div>
                </div>

                {{-- Delete account --}}
                <div class="mt-14 pt-8 border-t border-slate-100 flex flex-col items-center text-center">
                    <p class="text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-4">
                        Need to close your account?
                    </p>
                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <div class="w-full flex justify-center">
                            @livewire('profile.delete-user-form')
                        </div>
                    @endif
                </div>

            </div>
        </aside>

        {{-- Divider --}}
        <div class="hidden lg:flex items-center">
            <div class="h-[80%] w-px bg-gradient-to-b from-transparent via-slate-200 to-transparent"></div>
        </div>

        {{-- RIGHT: Account Settings (REPAIRED - no Alpine tabs, no Livewire conflict) --}}
        @php
            $tab = request('tab', 'profile'); // 'profile' or 'password'
        @endphp

        <main class="w-full lg:w-[60%] bg-slate-50 flex flex-col px-6 sm:px-10 lg:px-14 py-12 lg:py-16">
            <div class="max-w-3xl w-full">

                <h2 class="text-4xl font-black text-slate-900 tracking-tight mb-2">
                    Account Settings
                </h2>
                <p class="text-slate-500 mb-10">
                    Update your profile details and password securely.
                </p>

                {{-- Tabs (flat) --}}
                <div class="flex gap-8 border-b border-slate-200 mb-12">
                    <a href="{{ route('profile.show', ['tab' => 'profile']) }}"
                       class="pb-4 border-b-2 font-black text-sm uppercase tracking-widest transition-all
                              {{ $tab === 'profile'
                                    ? 'text-[#0b1320] border-[#22C55E]'
                                    : 'text-slate-400 border-transparent hover:text-slate-600' }}">
                        Edit Profile
                    </a>

                    <a href="{{ route('profile.show', ['tab' => 'password']) }}"
                       class="pb-4 border-b-2 font-black text-sm uppercase tracking-widest transition-all
                              {{ $tab === 'password'
                                    ? 'text-[#0b1320] border-[#22C55E]'
                                    : 'text-slate-400 border-transparent hover:text-slate-600' }}">
                        Update Password
                    </a>
                </div>

                {{-- Only mount ONE Livewire component --}}
                <div class="w-full">
                    @if ($tab === 'password')
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            @livewire('profile.update-password-form', [], key('password-form'))
                        @endif
                    @else
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form', [], key('profile-form'))
                        @endif
                    @endif
                </div>

            </div>
        </main>

    </div>
</x-app-layout>
