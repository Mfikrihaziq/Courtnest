<x-app-layout>
    <div class="min-h-screen bg-[#F3F4F6] py-12 font-sans selection:bg-[#22C55E] selection:text-white">
        <div class="max-w-3xl mx-auto px-6">
            
            <div class="text-center mb-10">
                <h2 class="text-4xl font-black text-[#020d04] italic uppercase tracking-tighter">Secure Checkout</h2>
                <p class="text-[#22C55E] font-black uppercase text-xs tracking-[0.2em] mt-2">Finalize your booking at {{ $booking->court_name }}</p>
            </div>

            <div class="bg-[#1A1C1E] border-[3px] border-[#22C55E] rounded-[2.5rem] overflow-hidden shadow-[0_40px_100px_rgba(0,0,0,0.2)]">
                
                <div class="p-8 bg-black/40 border-b border-[#22C55E]/20">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                        <div>
                            <span class="text-[#22C55E] font-black uppercase text-[10px] tracking-widest block mb-1">Booking Details</span>
                            <h3 class="text-2xl font-bold text-white uppercase tracking-tight">{{ $booking->sport_type }} - {{ $booking->court_name }}</h3>
                            <p class="text-gray-400 font-medium">
                                {{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') }} | 
                                {{ \Carbon\Carbon::parse($booking->start_time)->format('h:i A') }} 
                                ({{ $booking->duration }} Hours)
                            </p>
                        </div>
                        <div class="bg-black p-4 rounded-2xl border border-[#22C55E]/30 text-right min-w-[140px]">
                            <span class="text-gray-500 text-[10px] font-bold uppercase block tracking-tighter">Amount Due</span>
                            <span class="text-3xl font-black text-[#22C55E]">RM {{ number_format($booking->total_price, 2) }}</span>
                        </div>
                    </div>
                </div>

                <form action="{{ route('bookings.pay') }}" method="POST" class="p-8 space-y-8">
                    @csrf
                    
                    <div>
                        <label class="block text-gray-500 font-black uppercase text-[10px] tracking-widest mb-6 ml-1">Select Payment Method</label>
                        
                        <div class="grid grid-cols-1 gap-4">
                            
                            <label class="relative flex items-center p-6 border-2 border-transparent bg-[#2A2D31] rounded-2xl cursor-pointer hover:bg-[#32363b] transition-all group">
                                <input type="radio" name="payment_method" value="duitnow" class="hidden peer" checked>
                                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mr-5 p-2 shadow-lg">
                                    <img src="https://payment-gateway.net.my/wp-content/uploads/2022/10/duitnow-logo.png" alt="DuitNow" class="max-w-full">
                                </div>
                                <div class="flex-1">
                                    <span class="block font-black text-white uppercase text-sm tracking-tight">DuitNow QR / Instant Transfer</span>
                                    <span class="text-xs text-gray-500 font-bold uppercase tracking-tighter">Fast & Secure Digital Payment</span>
                                </div>
                                <div class="w-6 h-6 border-2 border-gray-600 rounded-full flex items-center justify-center group-hover:border-[#22C55E] transition-colors">
                                    <div class="w-3 h-3 bg-[#22C55E] rounded-full scale-0 peer-checked:scale-100 transition-transform"></div>
                                </div>
                                <div class="absolute inset-0 border-2 border-[#22C55E] rounded-2xl opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"></div>
                            </label>

                            <label class="relative flex items-center p-6 border-2 border-transparent bg-[#2A2D31] rounded-2xl cursor-pointer hover:bg-[#32363b] transition-all group">
                                <input type="radio" name="payment_method" value="tng" class="hidden peer">
                                <div class="w-14 h-14 bg-[#005baa] rounded-xl flex items-center justify-center mr-5 p-2 shadow-lg">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Touch_%27n_Go_eWallet_logo.svg/1200px-Touch_%27n_Go_eWallet_logo.svg.png" alt="TNG" class="max-w-[80%] brightness-200">
                                </div>
                                <div class="flex-1">
                                    <span class="block font-black text-white uppercase text-sm tracking-tight">Touch 'n Go eWallet</span>
                                    <span class="text-xs text-gray-500 font-bold uppercase tracking-tighter">Pay using your TNG mobile app</span>
                                </div>
                                <div class="w-6 h-6 border-2 border-gray-600 rounded-full flex items-center justify-center group-hover:border-[#22C55E] transition-colors">
                                    <div class="w-3 h-3 bg-[#22C55E] rounded-full scale-0 peer-checked:scale-100 transition-transform"></div>
                                </div>
                                <div class="absolute inset-0 border-2 border-[#22C55E] rounded-2xl opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"></div>
                            </label>

                            <label class="relative flex items-center p-6 border-2 border-transparent bg-[#2A2D31] rounded-2xl cursor-pointer hover:bg-[#32363b] transition-all group">
                                <input type="radio" name="payment_method" value="card" class="hidden peer">
                                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mr-5 p-2 shadow-lg">
                                    <div class="flex gap-1">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="w-6">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="w-6">
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <span class="block font-black text-white uppercase text-sm tracking-tight">Credit / Debit Card</span>
                                    <span class="text-xs text-gray-500 font-bold uppercase tracking-tighter">Visa, Mastercard, or AMEX</span>
                                </div>
                                <div class="w-6 h-6 border-2 border-gray-600 rounded-full flex items-center justify-center group-hover:border-[#22C55E] transition-colors">
                                    <div class="w-3 h-3 bg-[#22C55E] rounded-full scale-0 peer-checked:scale-100 transition-transform"></div>
                                </div>
                                <div class="absolute inset-0 border-2 border-[#22C55E] rounded-2xl opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"></div>
                            </label>

                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-[#22C55E] hover:bg-[#16a34a] text-[#020d04] font-black py-6 rounded-2xl transition-all transform hover:scale-[1.02] active:scale-95 shadow-[0_20px_40px_rgba(34,197,94,0.3)] uppercase tracking-[0.2em] text-sm flex items-center justify-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            Secure Pay RM {{ number_format($booking->total_price, 2) }}
                        </button>
                        <p class="text-center text-gray-600 text-[10px] mt-6 uppercase tracking-widest font-black">
                            Locked & Encrypted by CourtNest Security
                        </p>
                    </div>
                </form>
            </div>
            
            <div class="mt-10 text-center">
                <a href="{{ route('dashboard') }}" class="text-[#020d04]/60 hover:text-[#020d04] text-xs font-black transition uppercase tracking-widest border-b-2 border-transparent hover:border-[#22C55E]">
                    Cancel & Return to Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>