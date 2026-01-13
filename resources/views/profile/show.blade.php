<x-app-layout>
    <div class="min-h-screen bg-[#F3F4F6] font-sans selection:bg-[#22C55E]">
        
        <header class="bg-[#1A1C1E] border-b border-[#22C55E]/30 py-8 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
                <h2 class="font-black text-3xl text-white italic uppercase tracking-tighter">
                    Account <span class="text-[#22C55E]">Settings</span>
                </h2>
                <p class="text-gray-500 text-[10px] font-bold uppercase tracking-[0.3em] mt-1">Manage your profile & security</p>
            </div>
        </header>

        <div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
            <div class="space-y-12">
                
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    <div class="bg-[#1A1C1E] p-8 rounded-[3rem] border-[3px] border-[#22C55E] shadow-[0_20px_50px_rgba(0,0,0,0.15)] relative overflow-hidden">
                        <div class="absolute top-0 right-0 -mr-16 -mt-16 w-32 h-32 bg-[#22C55E] rounded-full blur-[80px] opacity-10"></div>
                        
                        <div class="relative z-10">
                            @livewire('profile.update-profile-information-form')
                        </div>
                    </div>
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="bg-[#1A1C1E] p-8 rounded-[3rem] border-[3px] border-[#22C55E] shadow-[0_20px_50px_rgba(0,0,0,0.15)] relative overflow-hidden">
                        <div class="absolute top-0 right-0 -mr-16 -mt-16 w-32 h-32 bg-[#22C55E] rounded-full blur-[80px] opacity-10"></div>
                        
                        <div class="relative z-10">
                            @livewire('profile.update-password-form')
                        </div>
                    </div>
                @endif

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <div class="bg-[#1A1C1E] p-8 rounded-[3rem] border-[3px] border-red-600/50 shadow-xl mt-10 opacity-90">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
                
            </div>
        </div>
    </div>
</x-app-layout>