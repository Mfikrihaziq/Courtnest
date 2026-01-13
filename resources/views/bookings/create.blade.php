<x-app-layout>
    <style>
        ::-webkit-calendar-picker-indicator {
            filter: invert(48%) sepia(79%) saturate(2476%) hue-rotate(86deg) brightness(118%) contrast(119%);
            cursor: pointer;
        }
        option:disabled { 
            color: #4b5563 !important; 
            background-color: #111827 !important; 
            font-style: italic;
        }
    </style>

    <div class="min-h-screen bg-[#F3F4F6] py-12 font-sans selection:bg-[#22C55E]">
        <div class="max-w-4xl mx-auto px-6">
            
            <div class="mb-8">
                <a href="{{ route('dashboard') }}" class="text-[#020d04] hover:text-[#22C55E] font-black uppercase text-xs tracking-widest flex items-center transition group">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Dashboard
                </a>
            </div>

            <div class="bg-[#1A1C1E] border-[3px] border-[#22C55E] rounded-[3rem] p-10 shadow-[0_40px_100px_rgba(0,0,0,0.2)] relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-32 h-32 bg-[#22C55E] rounded-full blur-[80px] opacity-10"></div>

                <h2 class="text-4xl font-black text-white italic uppercase tracking-tighter mb-10 relative z-10">Book Your <span class="text-[#22C55E]">Court</span></h2>

                @if($errors->any())
                    <div class="bg-red-500/10 border border-red-500/50 text-red-500 p-4 rounded-2xl mb-8 relative z-10">
                        <ul class="font-bold text-sm">
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <div id="booking-data-bridge" data-booked='@json($bookedSlots)'></div>

                <form action="{{ route('bookings.store') }}" method="POST" id="bookingForm" class="space-y-8 relative z-10">
                    @csrf
                    
                    <div class="group">
                        <label class="block text-gray-400 font-black uppercase text-[10px] mb-3 tracking-widest ml-1">Select Arena</label>
                        <select name="court_id" id="court_id" required class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-5 appearance-none focus:border-[#22C55E] focus:bg-[#020d04] transition-all outline-none font-bold">
                            <option value="" disabled selected>Choose a court...</option>
                            @foreach($courts as $court)
                                <option value="{{ $court->id }}" data-price="{{ $court->price_per_hour }}">
                                    {{ $court->name }} (RM{{ number_format($court->price_per_hour, 2) }}/hr)
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <label class="block text-gray-400 font-black uppercase text-[10px] mb-3 tracking-widest ml-1">Date</label>
                            <input type="date" name="booking_date" id="booking_date" 
                                   required min="{{ date('Y-m-d') }}" 
                                   value="{{ date('Y-m-d') }}" 
                                   class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-5 focus:border-[#22C55E] focus:bg-[#020d04] transition-all outline-none font-bold">
                        </div>

                        <div>
                            <label class="block text-gray-400 font-black uppercase text-[10px] mb-3 tracking-widest ml-1">Duration</label>
                            <select name="duration" id="duration" required class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-5 appearance-none focus:border-[#22C55E] focus:bg-[#020d04] transition-all outline-none font-bold">
                                <option value="1">1 Hour</option>
                                <option value="2">2 Hours</option>
                                <option value="3">3 Hours</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-400 font-black uppercase text-[10px] mb-3 tracking-widest ml-1">Start Time</label>
                            <select name="start_time" id="start_time" required class="w-full bg-[#2A2D31] border-2 border-transparent text-white rounded-2xl p-5 appearance-none focus:border-[#22C55E] focus:bg-[#020d04] transition-all outline-none font-bold">
                                <option value="" disabled selected>Select time</option>
                                @for ($hour = 8; $hour <= 22; $hour++)
                                    <option value="{{ sprintf('%02d:00:00', $hour) }}">
                                        {{ date('h:i A', strtotime("$hour:00")) }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div id="price-preview" class="hidden text-right p-6 bg-black border border-[#22C55E]/20 rounded-[2rem] shadow-inner">
                        <span class="text-gray-500 uppercase text-[10px] font-black tracking-[0.2em]">Estimated Total: </span>
                        <span id="total-price-tag" class="text-[#22C55E] text-3xl font-black ml-2 tracking-tight">RM 0.00</span>
                    </div>

                    <button type="submit" class="w-full bg-[#22C55E] hover:bg-[#16a34a] text-[#020d04] font-black py-6 rounded-2xl transition-all transform hover:scale-[1.01] active:scale-95 shadow-[0_20px_40px_rgba(34,197,94,0.2)] uppercase tracking-[0.2em] text-sm">
                        Confirm & Proceed
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const courtSelect = document.getElementById('court_id');
            const dateInput = document.getElementById('booking_date');
            const timeSelect = document.getElementById('start_time');
            const durationSelect = document.getElementById('duration');
            const bridge = document.getElementById('booking-data-bridge');
            const pricePreview = document.getElementById('price-preview');
            const totalPriceTag = document.getElementById('total-price-tag');
            
            const bookedSlots = JSON.parse(bridge.getAttribute('data-booked') || '[]');

            function updateUI() {
                const selectedCourt = courtSelect.value;
                const selectedDate = dateInput.value;
                const selectedDuration = parseInt(durationSelect.value);
                const options = timeSelect.options;

                const courtOption = courtSelect.options[courtSelect.selectedIndex];
                if (selectedCourt) {
                    const price = parseFloat(courtOption.getAttribute('data-price'));
                    totalPriceTag.innerText = `RM ${(price * selectedDuration).toFixed(2)}`;
                    pricePreview.classList.remove('hidden');
                }

                const now = new Date();
                const todayStr = now.toLocaleDateString('en-CA');
                const currentHour = now.getHours();

                for (let i = 0; i < options.length; i++) {
                    const option = options[i];
                    if (option.value === "") continue;
                    const optionHour = parseInt(option.value.split(':')[0]);
                    const isPast = (selectedDate === todayStr && optionHour <= currentHour);
                    const isOccupied = bookedSlots.some(slot => {
                        if (slot.court_id != selectedCourt || slot.booking_date !== selectedDate) return false;
                        const endHour = parseInt(slot.start_hour) + parseInt(slot.duration);
                        return (optionHour >= slot.start_hour && optionHour < endHour);
                    });

                    if (isPast || isOccupied) {
                        option.disabled = true;
                        if (!option.text.includes('(')) {
                            option.text += isPast ? ' (Passed)' : ' (Occupied)';
                        }
                    } else {
                        option.disabled = false;
                        option.text = option.text.replace(' (Passed)', '').replace(' (Occupied)', '');
                    }
                }
            }
            courtSelect.addEventListener('change', updateUI);
            dateInput.addEventListener('change', updateUI);
            durationSelect.addEventListener('change', updateUI);
            updateUI();
        });
    </script>
</x-app-layout>