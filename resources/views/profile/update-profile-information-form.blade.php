<div class="w-full"
     x-data="{
        showSuccess: false
     }"
     x-on:saved.window="
        showSuccess = true;
        setTimeout(() => {
            window.location.reload();
        }, 1500);
     "
>

    <form wire:submit.prevent="updateProfileInformation" class="w-full space-y-6">

        {{-- Full Name --}}
        <div>
            <x-label for="name" value="Full Name" />
            <x-input
                id="name"
                type="text"
                class="mt-1 block w-full text-slate-900 bg-white"
                wire:model.defer="state.name"
                autocomplete="name"
            />
            <x-input-error for="name" class="mt-2" />
        </div>

        {{-- Email --}}
        <div>
            <x-label for="email" value="Email Address" />
            <x-input
                id="email"
                type="email"
                class="mt-1 block w-full text-slate-900 bg-white"
                wire:model.defer="state.email"
                autocomplete="username"
            />
            <x-input-error for="email" class="mt-2" />
        </div>

        {{-- Phone Number --}}
        <div>
            <x-label for="phone_number" value="Phone Number" />
            <x-input
                id="phone_number"
                type="text"
                class="mt-1 block w-full text-slate-900 bg-white"
                wire:model.defer="state.phone_number"
            />
            <x-input-error for="phone_number" class="mt-2" />
        </div>

        {{-- Actions --}}
        <div class="flex items-center justify-end pt-6">
            <button
                type="submit"
                class="bg-[#0b1320] hover:bg-slate-800 text-white px-6 py-3 rounded-xl font-semibold transition"
            >
                Save Changes
            </button>
        </div>
    </form>

    {{-- ✅ SUCCESS POPUP --}}
<div
    x-show="showSuccess"
    x-transition.opacity
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm"
>
    <div
        x-transition.scale
        class="bg-white rounded-[32px] px-10 py-8 shadow-[0_30px_80px_rgba(15,23,42,0.25)]
               flex flex-col items-center gap-6 w-full max-w-sm"
    >
        {{-- Icon --}}
        <div class="w-16 h-16 rounded-full bg-emerald-100 flex items-center justify-center shadow-inner">
            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                      d="M5 13l4 4L19 7"/>
            </svg>
        </div>

        {{-- Title --}}
        <h3 class="text-xl font-black tracking-tight text-slate-900">
            Profile Updated
        </h3>

        {{-- Description --}}
        <p class="text-base text-slate-600 text-center leading-relaxed">
            Your changes were saved successfully.<br>
        </p>
    </div>
</div>


</div>
