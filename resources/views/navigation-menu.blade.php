<nav x-data="{ open: false }" class="bg-[#020d04] border-b border-green-900/30 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-2xl font-black  tracking-tighter text-white">
                        COURTNEST
                    </a>
                    
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase font-black tracking-widest hover:text-green-500 transition active:text-white active:border-green-500">
                        {{ __('Profileeeee') }}
                    </x-nav-link>
                    
                    <x-nav-link href="{{ route('bookings.create') }}" :active="request()->routeIs('bookings.create')" class="text-xs uppercase font-black tracking-widest hover:text-green-500 transition active:text-white active:border-green-500">
                        {{ __('') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase font-black tracking-widest hover:text-green-500 transition active:text-white active:border-green-500">
                        {{ __('see') }}
                    </x-nav-link>

                    
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="ml-3 relative">


                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-bold text-gray-400 hover:text-white transition">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="block px-4 py-2 text-xs text-gray-400 font-black uppercase tracking-widest">Manage Account</div>
                            <x-dropdown-link href="{{ route('profile.show') }}">Profile Settings</x-dropdown-link>
                            <div class="border-t border-gray-800"></div>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();" class="text-red-500">
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>


                </div>
            </div>
        </div>
    </div>
</nav>