<x-form-section submit="updatePassword">
    <x-slot name="title">
        <span class="text-white font-black uppercase text-sm tracking-widest">{{ __('Update Password') }}</span>
    </x-slot>

    <x-slot name="description">
        <span class="text-gray-500 text-xs">{{ __('Ensure your account is using a long, random password to stay secure.') }}</span>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4 space-y-4">
            <div>
                <x-label for="current_password" value="{{ __('Current Password') }}" class="text-gray-400 font-bold uppercase text-[10px]" />
                <x-input id="current_password" type="password" class="mt-1 block w-full bg-black border-green-900/30 text-white rounded-xl focus:border-green-500" wire:model.defer="state.current_password" autocomplete="current-password" />
            </div>

            <div>
                <x-label for="password" value="{{ __('New Password') }}" class="text-gray-400 font-bold uppercase text-[10px]" />
                <x-input id="password" type="password" class="mt-1 block w-full bg-black border-green-900/30 text-white rounded-xl focus:border-green-500" wire:model.defer="state.password" autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-gray-400 font-bold uppercase text-[10px]" />
                <x-input id="password_confirmation" type="password" class="mt-1 block w-full bg-black border-green-900/30 text-white rounded-xl focus:border-green-500" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <button class="bg-green-500 hover:bg-green-400 text-black font-black px-8 py-2 rounded-xl transition uppercase tracking-widest text-xs">
            {{ __('Update Password') }}
        </button>
    </x-slot>
</x-form-section>