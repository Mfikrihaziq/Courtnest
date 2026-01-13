<x-guest-layout>
    <div class="min-h-screen bg-[#F3F4F6] flex flex-col justify-center items-center font-sans py-16 selection:bg-green-500">
        
        <div class="mb-10 text-center">
            <h1 class="text-6xl font-black text-[#020d04] italic uppercase tracking-tighter">COURT<span class="text-[#22C55E]">NEST</span></h1>
        </div>

        <div class="w-full max-w-xl bg-[#1A1C1E] border-[3px] border-[#22C55E] p-12 rounded-[3.5rem] shadow-[0_40px_100px_rgba(0,0,0,0.2)] relative overflow-hidden">
            
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-[#22C55E] rounded-full blur-[90px] opacity-20"></div>

            <div class="mb-10 relative z-10">
                <h2 class="text-3xl font-black text-white uppercase tracking-tight">Create Account</h2>
                <div class="h-1 w-12 bg-[#22C55E] mt-2"></div> </div>

            <x-validation-errors class="mb-6" />

            <form method="POST" action="{{ route('register') }}" class="space-y-6 relative z-10">
                @csrf
                
                <div class="group">
                    <label class="block text-gray-400 font-black uppercase text-[10px] mb-2 ml-1 tracking-widest">Name</label>
                    <input type="text" name="name" :value="old('name')" required autofocus placeholder="Enter full name" 
                        class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-4 focus:border-[#22C55E] focus:bg-[#020d04] outline-none transition-all placeholder:text-gray-600 shadow-inner">
                </div>

                <div class="group">
                    <label class="block text-gray-400 font-black uppercase text-[10px] mb-2 ml-1 tracking-widest">Phone Number</label>
                    <input type="text" name="phone_number" :value="old('phone_number')" required placeholder="012-3456789" 
                        class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-4 focus:border-[#22C55E] focus:bg-[#020d04] outline-none transition-all placeholder:text-gray-600 shadow-inner">
                </div>

                <div class="group">
                    <label class="block text-gray-400 font-black uppercase text-[10px] mb-2 ml-1 tracking-widest">Email Address</label>
                    <input type="email" name="email" :value="old('email')" required placeholder="your@email.com" 
                        class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-4 focus:border-[#22C55E] focus:bg-[#020d04] outline-none transition-all placeholder:text-gray-600 shadow-inner">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-400 font-black uppercase text-[10px] mb-2 ml-1 tracking-widest">Password</label>
                        <input type="password" name="password" required placeholder="••••••••" 
                            class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-4 focus:border-[#22C55E] focus:bg-[#020d04] outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-gray-400 font-black uppercase text-[10px] mb-2 ml-1 tracking-widest">Confirm Password</label>
                        <input type="password" name="password_confirmation" required placeholder="••••••••" 
                            class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-4 focus:border-[#22C55E] focus:bg-[#020d04] outline-none transition-all">
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full bg-[#22C55E] hover:bg-[#16a34a] text-[#020d04] font-black py-5 rounded-2xl transition-all transform hover:scale-[1.02] active:scale-95 shadow-[0_15px_30px_rgba(34,197,94,0.3)] uppercase tracking-[0.2em] text-sm">
                        Register
                    </button>
                </div>
            </form>

            <div class="text-center mt-10">
                <p class="text-gray-500 text-[10px] font-black uppercase tracking-[0.2em]">
                    Already a member? <a href="{{ route('login') }}" class="text-white hover:text-[#22C55E] transition border-b border-white/20 ml-2">Sign In</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>