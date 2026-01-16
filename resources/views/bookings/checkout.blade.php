<x-app-layout>
    <div class="min-h-screen bg-[#F3F4F6] pt-28 pb-12 font-sans selection:bg-[#22C55E] selection:text-white">
        <style>
            .payment-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
            .peer:checked ~ .payment-card { border-color: #22C55E; background: white; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05); }
            .peer:checked ~ .payment-card .radio-indicator { border-color: #22C55E; }
            .peer:checked ~ .payment-card .radio-dot { opacity: 1; transform: scale(1); }
        </style>
        
        <div class="max-w-5xl mx-auto px-6">
            
            <div class="mb-3">
                <h2 class="text-4xl font-black text-[#0b1320] tracking-tighter uppercase italic">Secure Checkout</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <div class="lg:col-span-7 order-2 lg:order-1">
                    <form action="{{ route('bookings.pay') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-200/60">
                            <h4 class="text-base font-black uppercase tracking-[0.1em] text-gray-400 mb-6">Select Payment Method</h4>
                            
                            <div class="grid grid-cols-1 gap-4">
                                <label class="relative block cursor-pointer">
                                    <input type="radio" name="payment_method" value="tng" class="peer hidden" checked>
                                    <div class="payment-card flex items-center p-5 rounded-2xl border-2 border-gray-100 bg-gray-50 hover:bg-gray-100">
                                        <div class="w-16 h-12 flex items-center justify-center mr-5">
                                            <img src="{{ asset('assets/img/tng.png') }}" alt="Touch n Go" class="h-10 w-auto object-contain">
                                        </div>
                                        <div class="flex-1">
                                            <span class="block font-bold text-[#0b1320] text-lg leading-tight">Touch 'n Go eWallet</span>
                                            <span class="text-xs text-gray-500 font-medium">Instant & Seamless mobile payment</span>
                                        </div>
                                        <div class="radio-indicator w-6 h-6 border-2 border-gray-300 rounded-full flex items-center justify-center transition-colors">
                                            <div class="radio-dot w-3 h-3 bg-[#22C55E] rounded-full opacity-0 scale-50 transition-all"></div>
                                        </div>
                                    </div>
                                </label>

                                <label class="relative block cursor-pointer">
                                    <input type="radio" name="payment_method" value="maybank" class="peer hidden">
                                    <div class="payment-card flex items-center p-5 rounded-2xl border-2 border-gray-100 bg-gray-50 hover:bg-gray-100">
                                        <div class="w-16 h-12 flex items-center justify-center mr-5">
                                            <img src="{{ asset('assets/img/maybank.webp') }}" alt="Maybank2u" class="h-10 w-auto object-contain">
                                        </div>
                                        <div class="flex-1">
                                            <span class="block font-bold text-[#0b1320] text-lg leading-tight">Maybank2u / FPX</span>
                                            <span class="text-xs text-gray-500 font-medium">Direct online banking transfer</span>
                                        </div>
                                        <div class="radio-indicator w-6 h-6 border-2 border-gray-300 rounded-full flex items-center justify-center transition-colors">
                                            <div class="radio-dot w-3 h-3 bg-[#22C55E] rounded-full opacity-0 scale-50 transition-all"></div>
                                        </div>
                                    </div>
                                </label>

                                <label class="relative block cursor-pointer">
                                    <input type="radio" name="payment_method" value="card" class="peer hidden">
                                    <div class="payment-card flex items-center p-5 rounded-2xl border-2 border-gray-100 bg-gray-50 hover:bg-gray-100">
                                        <div class="w-16 h-12 flex items-center justify-center mr-5">
                                            <div class="flex gap-1">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="w-6">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="MC" class="w-6">
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <span class="block font-bold text-[#0b1320] text-lg leading-tight">Credit / Debit Card</span>
                                            <span class="text-xs text-gray-500 font-medium">Visa, Mastercard, or AMEX</span>
                                        </div>
                                        <div class="radio-indicator w-6 h-6 border-2 border-gray-300 rounded-full flex items-center justify-center transition-colors">
                                            <div class="radio-dot w-3 h-3 bg-[#22C55E] rounded-full opacity-0 scale-50 transition-all"></div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-[#0b1320] hover:bg-[#162130] text-white font-black py-6 rounded-2xl transition-all transform hover:-translate-y-1 active:scale-95 shadow-2xl shadow-blue-900/20 uppercase tracking-[0.2em] text-sm flex items-center justify-center">
                            <svg class="w-5 h-5 mr-3 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            Confirm & Pay RM {{ number_format($booking->total_price, 2) }}
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-5 order-1 lg:order-2">
                    <div class="sticky top-28 bg-[#0b1320] rounded-[2.5rem] text-white overflow-hidden shadow-2xl">
                        <div class="p-8 relative">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-[#22C55E] opacity-10 rounded-full -mr-16 -mt-16 blur-3xl"></div>
                            
                            <h4 class="text-[22px] font-black uppercase tracking-[0.2em] text-[#22C55E]/80 mb-6 text-center">Order Summary</h4>
                            
                            <div class="flex items-center gap-5 mb-6 pb-6 border-b border-white/5">
                                <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-3xl">@if(str_contains(strtolower($booking->sport_type), 'badminton')) 🏸 @elseif(str_contains(strtolower($booking->sport_type), 'futsal')) ⚽ @elseif(str_contains(strtolower($booking->sport_type), 'volleyball')) 🏐 @else 🏆 @endif                                </div>
                                <div>
                                    <h3 class="text-xl font-black italic uppercase tracking-tighter">{{ $booking->court_name }}</h3>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex justify-between items-center text-base">
                                    <span class="text-white/70 font-bold uppercase tracking-widest text-[12px]">Date :</span>
                                    <span class="font-bold">{{ \Carbon\Carbon::parse($booking->booking_date)->format('D, d M Y') }}</span>
                                </div>
                                <div class="flex justify-between items-center text-base">
                                    <span class="text-white/70 font-bold uppercase tracking-widest text-[12px]">Time Slot :</span>
                                    <span class="font-bold text-[#22C55E]">{{ \Carbon\Carbon::parse($booking->start_time)->format('h:i A') }}</span>
                                </div>
                                <div class="flex justify-between items-center text-base">
                                    <span class="text-white/70 font-bold uppercase tracking-widest text-[12px]">Duration :</span>
                                    <span class="font-bold">{{ $booking->duration }} hour{{ $booking->duration > 1 ? 's' : '' }}</span>
                                </div>
                            </div>

                            <div class="mt-8 p-6 bg-gradient-to-br from-white/10 to-transparent rounded-[2rem] border border-white/10">
                                <span class="text-[15px] font-black uppercase tracking-widest text-[#22C55E] block mb-1">Total :</span>
                                <span class="text-3xl font-black tracking-tighter leading-none">RM {{ number_format($booking->total_price, 2) }}</span>
                            </div>
                        </div>
                        
                        <div class="bg-black/40 p-4 text-center border-t border-white/5">
                            <p class="text-[10px] text-white/40 uppercase tracking-widest font-black flex items-center justify-center gap-2">
                                <svg class="w-3 h-3 text-[#22C55E]" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                Secure Transaction
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>