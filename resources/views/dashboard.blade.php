<x-app-layout>
    <div class="min-h-screen py-12">

        <div class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-12">
    <div class="relative overflow-hidden rounded-[32px] bg-[#0b1320] text-white border border-white/10 shadow-[0_25px_80px_rgba(0,0,0,0.35)] p-8 sm:p-12 mb-12 group transition-all duration-500 hover:border-white/20"
         style="background-image: linear-gradient(135deg, rgba(11,19,32,0.95) 0%, rgba(11,19,32,0.7) 100%), url('{{ asset('assets/img/courtlogin.png') }}'); background-size: cover; background-position: center;">
        
        <div class="absolute -top-24 -right-24 w-[500px] h-[500px] bg-[#22C55E]/15 rounded-full blur-[100px] group-hover:bg-[#22C55E]/25 transition-all duration-700"></div>
        <div class="absolute -bottom-24 -left-24 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[100px]"></div>

        <div class="relative flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8">
                
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-tr from-[#22C55E] to-blue-500 rounded-3xl blur opacity-30 group-hover:opacity-60 transition duration-500"></div>
                    <div class="relative w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-[#0b1320] border border-white/10 p-1 overflow-hidden shadow-2xl">
                        @if(auth()->check())
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0b1320&color=fff&size=256" alt="avatar" class="w-full h-full object-cover rounded-xl">
                        @endif
                    </div>
                </div>

                <div class="text-center sm:text-left">
                    <h2 class="text-4xl sm:text-5xl font-black tracking-tighter mb-4">
                        Welcome, <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-white/60">{{ explode(' ', auth()->user()->name)[0] ?? 'Guest' }}</span> 👋
                    </h2>
                    
                    <div class="flex flex-wrap justify-center sm:justify-start gap-4 sm:gap-8">
                        <div class="flex items-center gap-3 bg-white/5 backdrop-blur-md px-4 py-2 rounded-xl border border-white/5">
                            <div class="w-8 h-8 rounded-lg bg-[#22C55E]/20 flex items-center justify-center">
                                <i class="bi bi-envelope text-[#22C55E]"></i>
                            </div>
                            <span class="text-sm font-medium text-white/70">{{ auth()->user()->email ?? '' }}</span>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-white/5 backdrop-blur-md px-4 py-2 rounded-xl border border-white/5">
                            <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
                                <i class="bi bi-telephone text-blue-400"></i>
                            </div>
                            <span class="text-sm font-medium text-white/70">{{ auth()->user()->phone_number ?? '+60 --' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center lg:justify-end">
                <a href="{{ route('bookings.create') }}" class="group/btn relative inline-flex items-center justify-center px-10 py-5 overflow-hidden font-black text-[#0b1320] transition-all duration-300 bg-[#22C55E] rounded-2xl hover:bg-[#16a34a] hover:ring-4 hover:ring-[#22C55E]/30 transform hover:-translate-y-1 shadow-[0_10px_20px_rgba(34,197,94,0.2)]">
                    <span class="relative uppercase tracking-widest text-xs">Book a Court Now</span>
                    <i class="bi bi-arrow-right ml-3 transition-transform group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

   <div class="w-full px-4 sm:px-8 lg:px-12 mt-20">
    <div class="bg-white border border-black/10 rounded-[24px] shadow-[0_20px_50px_rgba(15,23,42,0.06)] overflow-hidden">
        
        <!-- ✅ Header Bar (premium soft gradient) -->
        <div class="px-8 py-6 bg-gradient-to-r from-emerald-50/60 via-white to-slate-50 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h3 class="text-2xl font-black tracking-tight text-[#0b1320]">
                    Booking History:
                </h3>
            </div>
            
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#22C55E]"></span>
                <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Live Status</span>
            </div>
        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full min-w-[980px] table-fixed">
                <colgroup>
                    <col class="w-[30%]">
                    <col class="w-[18%]">
                    <col class="w-[18%]">
                    <col class="w-[18%]">
                    <col class="w-[10%]">
                </colgroup>
                
                <!-- ✅ Table Head (clean + slightly stronger) -->
                <thead class="bg-slate-100/80 border-b border-slate-200">
                    <tr>
                        <th class="py-4 pl-8 pr-6 text-xs font-bold uppercase tracking-widest text-slate-700 text-left">
                            Court Details
                        </th>
                        <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-slate-600 text-left">
                            Date
                        </th>
                        <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-slate-600 text-left">
                            Time Slot
                        </th>
                        <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-slate-600 text-left">
                            Amount
                        </th>
                        <th class="py-4 pl-6 pr-8 text-xs font-bold uppercase tracking-widest text-slate-600 text-right">
                            Status
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @forelse($bookings as $booking)
                        <tr class="transition-all duration-200 odd:bg-white even:bg-slate-50/20 {{ $booking->status == 'cancelled' ? 'hover:bg-red-50/100' : 'hover:bg-emerald-50/100' }}">
                            <td class="py-6 pl-8 pr-6">
                              <div class="font-extrabold text-[#0b1320] text-lg leading-tight">
                                    {{ $booking->court->sport_type ?? 'Sport' }} 
                                    
                                    {{-- Dynamic Dot Color --}}
                                    <span class="{{ $booking->status == 'cancelled' ? 'text-red-500' : 'text-[#22C55E]' }} mx-1">•</span> 
                                    
                                    {{ $booking->court->name ?? 'Court' }}
                                </div>
                                <div class="mt-1.5 flex items-center gap-2">
                                    <span class="text-[10px] font-bold py-0.5 px-2 bg-slate-100 text-slate-500 rounded uppercase">
                                        ID #{{ $booking->id }}
                                    </span>
                                </div>
                            </td>

                            <td class="py-6 px-6 text-slate-600 font-semibold italic">
                                {{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}
                            </td>

                            <td class="py-6 px-6">
                                <div class="text-[#0b1320] font-bold">
                                    {{ \Carbon\Carbon::parse($booking->start_time)->format('h:i A') }}
                                </div>
                                <div class="text-xs text-slate-400 font-medium italic">
                                    Duration: {{ $booking->duration }} hour
                                </div>
                            </td>

                            <td class="py-6 px-6">
                                <span class="text-lg font-black text-[#0b1320]">
                                    RM{{ number_format($booking->total_price, 2) }}
                                </span>
                            </td>

                            <td class="py-6 pl-6 pr-8 text-right">
                                <div class="flex flex-col items-end gap-2">
                                    @if($booking->status == 'cancelled')
                                        <span class="px-3 py-1 rounded-lg text-[10px] font-black uppercase tracking-tighter bg-red-50 text-red-500 border border-red-100">
                                            Cancelled
                                        </span>
                                  @else
                                        <span class="px-3 py-1 rounded-lg text-[10px] font-black uppercase tracking-tighter bg-emerald-50 text-emerald-600 border border-emerald-100">
                                            Confirmed
                                        </span>
                                        
                                        {{-- Modern Cancel Form --}}
                                        <form id="cancel-form-{{ $booking->id }}" action="{{ route('bookings.cancel', $booking->id) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <button type="button" 
                                                    onclick="confirmCancel({{ $booking->id }})"
                                                    class="text-[10px] font-bold uppercase tracking-widest text-slate-400 hover:text-red-500 transition">
                                                Cancel
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-20 text-center">
                                <div class="flex flex-col items-center">
                                    <i class="bi bi-calendar-x text-4xl text-slate-200 mb-3"></i>
                                    <p class="text-slate-400 font-bold uppercase tracking-widest text-xs">
                                        No active bookings found
                                    </p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
 </div>
 <script>
function confirmCancel(bookingId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to undo this cancellation!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444', // Red-500
        cancelButtonColor: '#64748b',  // Slate-500
        confirmButtonText: 'Yes, cancel it!',
        cancelButtonText: 'No, keep it',
        reverseButtons: true,
        borderRadius: '24px', // Matches your UI roundness
        customClass: {
            popup: 'rounded-[24px]',
            confirmButton: 'rounded-lg px-4 py-2 font-bold',
            cancelButton: 'rounded-lg px-4 py-2 font-bold'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit the specific form if confirmed
            document.getElementById('cancel-form-' + bookingId).submit();
        }
    })
}
</script>
</x-app-layout>