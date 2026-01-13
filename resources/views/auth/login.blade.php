<x-guest-layout>
    <div class="min-h-screen bg-[#F3F4F6] flex flex-col justify-center items-center font-sans py-16 selection:bg-green-500">
        
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-black text-[#020d04] italic uppercase tracking-tighter">COURT<span class="text-[#22C55E]">NEST</span></h1>
        </div>

        <div class="w-full max-w-md bg-[#1A1C1E] border-[3px] border-[#22C55E] p-10 rounded-[2.5rem] shadow-[0_40px_100px_rgba(0,0,0,0.2)] relative overflow-hidden">
            
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-32 h-32 bg-[#22C55E] rounded-full blur-[80px] opacity-20"></div>

            <div class="text-center mb-10 relative z-10">
                <h2 class="text-xl font-black text-white uppercase tracking-tight">Sign In</h2>
                <p class="text-gray-500 text-[10px] font-bold uppercase tracking-[0.3em] mt-2 text-center">Welcome Back</p>
            </div>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6 relative z-10">
                @csrf
                <div>
                    <label class="block text-gray-400 font-black uppercase text-[10px] mb-2 ml-1 tracking-widest">Email Address</label>
                    <input type="email" name="email" :value="old('email')" required autofocus class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-4 focus:border-[#22C55E] focus:bg-[#020d04] outline-none transition placeholder:text-gray-600 shadow-inner">
                </div>

                <div>
                    <label class="block text-gray-400 font-black uppercase text-[10px] mb-2 ml-1 tracking-widest">Password</label>
                    <input type="password" name="password" required autocomplete="current-password" class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-4 focus:border-[#22C55E] focus:bg-[#020d04] outline-none transition placeholder:text-gray-600 shadow-inner">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <x-checkbox name="remember" class="bg-black border-[#22C55E] text-[#22C55E] focus:ring-[#22C55E]" />
                        <span class="ml-2 text-[10px] text-gray-500 font-black uppercase tracking-widest">{{ __('Remember me') }}</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-[10px] text-[#22C55E] hover:text-white font-black uppercase tracking-widest transition">Forgot?</a>
                </div>

                <button type="submit" class="w-full bg-[#22C55E] hover:bg-[#16a34a] text-[#020d04] font-black py-4 rounded-2xl transition shadow-lg shadow-green-500/20 uppercase tracking-[0.2em] text-sm">
                    Log In
                </button>
            </form>

            <p class="text-center text-gray-600 text-[10px] mt-8 font-black uppercase tracking-[0.2em] relative z-10">
                New to CourtNest? <a href="{{ route('register') }}" class="text-white hover:text-[#22C55E] transition border-b border-white/20 ml-1">Create Account</a>
            </p>
        </div>
    </div>
</x-guest-layout>