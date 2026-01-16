<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    {{-- ✅ 1. ADDED STACK FOR GALLERY STYLES --}}
    @stack('styles')

    <style>
        .footer {
            background: #0b1320; 
            padding: 60px 0;
            font-family: 'Inter', sans-serif;
            color: #ffffff;
            margin-top: auto;
        }
        /* ... keeping your existing footer styles ... */
        .footer-header { text-align: center; margin-bottom: 40px; }
        .footer h3 { font-size: 18px; font-weight: 900; text-transform: uppercase; letter-spacing: 5px; color: #ffffff; margin-bottom: 12px; }
        .header-line { width: 50px; height: 3px; background: #22c55e; margin: 0 auto; border-radius: 2px; }
        .contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto; }
        .contact-item { display: flex; flex-direction: column; align-items: center; text-align: center; }
        .icon-pod { width: 68px; height: 68px; background: rgba(255, 255, 255, 0.03); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; color: #22c55e; border: 1px solid rgba(255, 255, 255, 0.08); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .icon-pod svg { width: 30px; height: 30px; }
        .contact-item .label { font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; color: rgba(255, 255, 255, 0.4); margin-bottom: 6px; }
        .contact-item .value { font-size: 18px; font-weight: 600; color: #ffffff; text-decoration: none; transition: color 0.2s ease; }
        .contact-item:hover .icon-pod { background: #22c55e; color: #0b1320; transform: translateY(-5px); border-color: #22c55e; box-shadow: 0 15px 35px rgba(34, 197, 94, 0.15); }
        .contact-item:hover .value { color: #22c55e; }

        /* ✅ 2. SOFT UI BACK TO TOP BUTTON CSS */
        #backToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 56px;
            height: 56px;
            background: rgba(11, 19, 32, 0.8);
            backdrop-filter: blur(10px);
            color: #22c55e;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 9999;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        #backToTop.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        #backToTop:hover {
            background: #22c55e;
            color: #0b1320;
            transform: translateY(-5px);
        }
    </style>

    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen flex flex-col">
        @include('partials.header')

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @include('partials.footer')
    </div>

    {{-- ✅ 3. BACK TO TOP BUTTON HTML --}}
    <button id="backToTop" title="Go to top">
        <i class="bi bi-arrow-up"></i>
    </button>

    @stack('modals')
    @livewireScripts

    {{-- ✅ 4. ADDED STACK FOR GALLERY SCRIPTS --}}
    @stack('scripts')

    {{-- ✅ 5. BACK TO TOP SCRIPT --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const btn = document.getElementById("backToTop");
            window.addEventListener("scroll", () => {
                if (window.scrollY > 400) btn.classList.add("show");
                else btn.classList.remove("show");
            });
            btn.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });
    </script>

    <div x-data="{ open: false }" 
     x-on:open-logout-modal.window="open = true" 
     x-show="open" 
     class="fixed inset-0 z-[999] overflow-y-auto" 
     x-cloak>
    
    <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center">
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             @click.away="open = false"
             class="relative w-full max-w-sm transform overflow-hidden rounded-[2rem] bg-white p-8 shadow-2xl transition-all">
            
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-red-50 mb-6 group">
                <svg class="h-7 w-7 text-red-500 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </div>

            <h3 class="text-2xl font-black text-slate-900 tracking-tight">Sign Out?</h3>
            <p class="text-slate-500 font-medium mt-2 mb-8">Are you sure you want to end your session?</p>

            <div class="flex flex-col gap-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="w-full rounded-2xl bg-[#0b1320] px-6 py-4 text-sm font-black text-white hover:bg-red-600 transition-all active:scale-95 shadow-lg shadow-black/10">
                        Confirm Logout
                    </button>
                </form>

                <button @click="open = false" 
                        class="w-full rounded-2xl bg-slate-100 px-6 py-4 text-sm font-black text-slate-600 hover:bg-slate-200 transition-all">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

</body>
</html>