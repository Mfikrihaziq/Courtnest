<div class="w-full">
    <form wire:submit.prevent="updatePassword" class="w-full space-y-6">

        {{-- Current Password --}}
        <div>
            <x-label for="current_password" value="Current Password" />
            <x-input
                id="current_password"
                type="password"
                class="mt-1 block w-full text-slate-900" 
                wire:model="state.current_password"
                autocomplete="current-password"
            />
            <x-input-error for="state.current_password" class="mt-2" />
        </div>

        {{-- New Password --}}
        <div>
            <x-label for="password" value="New Password" />
            <x-input
                id="password"
                type="password"
                class="mt-1 block w-full text-slate-900"
                wire:model="state.password"
                autocomplete="new-password"
            />
            <x-input-error for="state.password" class="mt-2" />
        </div>

        {{-- Confirm Password --}}
        <div>
            <x-label for="password_confirmation" value="Confirm Password" />
            <x-input
                id="password_confirmation"
                type="password"
                class="mt-1 block w-full text-slate-900"
                wire:model="state.password_confirmation"
                autocomplete="new-password"
            />
            <x-input-error for="state.password_confirmation" class="mt-2" />
        </div>

        {{-- Actions --}}
<div 
    x-data="{ showSuccess: false }"
    x-on:saved.window="
        showSuccess = true;
        setTimeout(() => showSuccess = false, 1500);
        setTimeout(() => window.location.reload(), 1600);
    "
    class="flex items-center justify-end pt-6 gap-4"
>
    <x-button
        wire:loading.attr="disabled"
        class="bg-[#0b1320] hover:bg-slate-800 text-white px-6 py-3 rounded-xl font-semibold transition"

    >
        Update
    </x-button>

    {{-- ✅ SUCCESS POPUP --}}
    <div
        x-show="showSuccess"
        x-transition.opacity
        x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm"
    >
        <div
            x-transition.scale
            class="bg-white rounded-[32px] px-10 py-8
                   shadow-[0_30px_80px_rgba(15,23,42,0.25)]
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
                Password Updated
            </h3>

            {{-- Description --}}
            <p class="text-base text-slate-600 text-center leading-relaxed">
                Your password has been updated successfully.<br>
            </p>
        </div>
    </div>
</div>

        </div>

    </form>
</div>