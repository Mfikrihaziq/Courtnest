

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gallery - Tour Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/gallery.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>

   @vite(['resources/css/app.css', 'resources/js/app.js'])

  <header class="nav">
  <div class="container nav-inner">
    <div class="brand">CourtNest</div>

    <div class="nav-right">
      <nav class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">About Us</a>

        <a href="{{ route('dashboard') }}">Profile</a>
        <a href="{{ route('login') }}">Log in</a>

      </nav>

      <div class="nav-actions">
        <a href="{{ route('register') }}" class="btn btn-signup">Sign up</a>
      </div>
    </div>
  </div>
</header>

<x-app-layout>

    
    <div class="min-h-screen !bg-[#F3F4F6] py-12 font-sans selection:bg-[#22C55E] selection:text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden bg-[#1A1C1E] rounded-[2.5rem] p-8 mb-12 shadow-2xl flex flex-col md:flex-row justify-between items-center border-[3px] border-[#22C55E]">
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-[#22C55E] rounded-full blur-3xl opacity-10"></div>
                
                <div class="relative flex items-center z-10">
                    
                    <div class="relative">
                        <div class="absolute inset-0 bg-[#22C55E] rounded-2xl blur-lg opacity-20 animate-pulse"></div>
                        <div class="relative w-24 h-24 bg-gradient-to-br from-[#2A2D31] to-[#020d04] rounded-2xl flex items-center justify-center shadow-inner border border-[#22C55E]/30">
                            @if(auth()->check())
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=transparent&color=fff&size=128" alt="avatar" class="w-20 h-20">
                            @endif
                        </div>
                    </div>
                    


                    <div class="ml-8 text-white">
                        <h2 >Welcome, {{ auth()->user()->name ?? 'Guest' }}</h2>
                        <div class="flex flex-col sm:flex-row sm:gap-6 mt-2 text-gray-400 font-bold uppercase text-[10px] tracking-widest">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>{{ auth()->user()->email ?? '' }}</span>
                            <span class="flex items-center"><svg class="w-4 h-4 mr-2 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>{{ auth()->user()->phone_number ?? 'No phone' }}</span>
                        </div>
                    </div>
                </div>
                <a href="{{ route('profile.show') }}" class="relative z-10 mt-6 md:mt-0 bg-[#22C55E] hover:bg-[#16a34a] text-[#020d04] px-10 py-3 rounded-xl font-black uppercase text-xs tracking-[0.2em] transition duration-300 shadow-lg flex items-center">
                    Settings
                </a>
            </div>

            <div class="flex justify-between items-center mb-8">
                <h3 class="text-[#020d04] text-3xl font-black italic tracking-tighter uppercase underline decoration-[#22C55E] decoration-4 underline-offset-8">
                  Booking History
                </h3>
                <a href="{{ route('bookings.create') }}" class="bg-[#22C55E] hover:bg-[#16a34a] text-[#020d04] font-black px-6 py-3 rounded-full transition-all hover:scale-105 shadow-[0_10px_30px_rgba(34,197,94,0.3)] uppercase text-xs tracking-widest">
                  BOOK A COURT
                </a>
            </div>

            <div class="grid gap-6">
                @forelse($bookings as $booking)
                    <div class="group relative bg-[#1A1C1E] border-[3px] border-[#22C55E] rounded-[2.5rem] p-8 hover:shadow-2xl transition duration-500 overflow-hidden shadow-xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#22C55E]/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                        
                        <div class="relative flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                            <div class="flex-1 text-white">
                                <p class="text-[#22C55E] font-black text-2xl mb-2 uppercase tracking-tight italic">
                                    {{ $booking->court->sport_type ?? 'Sport' }} - {{ $booking->court->name ?? 'Court' }}
                                </p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-[10px] font-black uppercase tracking-widest">
                                    <div class="flex items-center text-gray-400">
                                        <svg class="w-4 h-4 mr-2 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        {{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') }}
                                    </div>
                                    <div class="flex items-center text-gray-400">
                                        <svg class="w-4 h-4 mr-2 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        {{ \Carbon\Carbon::parse($booking->start_time)->format('h:i A') }} ({{ $booking->duration }}h)
                                    </div>
                                    <div class="flex items-center text-white font-black">
                                        <svg class="w-4 h-4 mr-2 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        RM{{ number_format($booking->total_price, 2) }}
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row items-center gap-4">
                                @if($booking->status == 'cancelled')
                                    <span class="bg-red-500/10 border border-red-500/20 text-red-500 px-4 py-1.5 rounded-full font-black text-[10px] uppercase tracking-widest">Cancelled</span>
                                @else
                                    <span class="bg-[#22C55E]/10 border border-[#22C55E]/30 text-[#22C55E] px-4 py-1.5 rounded-full font-black text-[10px] uppercase tracking-widest">Confirmed</span>
                                    
                                    <form action="{{ route('bookings.cancel', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-red-500 hover:text-red-400 font-black text-[10px] uppercase tracking-widest transition underline decoration-red-500/30 underline-offset-8">
                                            Cancel
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-[#1A1C1E] border-2 border-dashed border-[#22C55E]/30 rounded-[2.5rem] p-12 text-center shadow-xl">
                        <p class="text-gray-500 font-black text-sm uppercase tracking-[0.2em] italic">No active bookings found.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-24 pt-12 border-t border-[#020d04]/10 text-center">
                <h4 class="text-[#020d04] font-black text-sm tracking-[0.3em] uppercase mb-8">Contact Us</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-[10px] font-black uppercase tracking-widest">
                    <div class="group"><p class="text-[#020d04] mb-2 border-b-2 border-[#22C55E]/30 inline-block pb-1 uppercase">Address</p><p class="text-gray-500">52100, KUALA LUMPUR</p></div>
                    <div class="group"><p class="text-[#020d04] mb-2 border-b-2 border-[#22C55E]/30 inline-block pb-1 uppercase">Email</p><p class="text-gray-500">COURTNEST@GMAIL.COM</p></div>
                    <div class="group"><p class="text-[#020d04] mb-2 border-b-2 border-[#22C55E]/30 inline-block pb-1 uppercase">Phone</p><p class="text-gray-500">012-345 6789</p></div>
                    <div class="group"><p class="text-[#020d04] mb-2 border-b-2 border-[#22C55E]/30 inline-block pb-1 uppercase">Hours</p><p class="text-gray-500 uppercase">MON - SUN | 8 AM - 11 PM</p></div>
                </div>
            </div>
        </div>
    </div>
 
</x-app-layout>