<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        <span class="text-white font-black uppercase text-sm tracking-widest">{{ __('Profile Information') }}</span>
    </x-slot>

    <x-slot name="description">
        <span class="text-gray-500 text-xs">{{ __('Update your account\'s profile information and email address.') }}</span>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Name') }}" class="text-gray-400 font-bold uppercase text-[10px] mb-2" />
            <x-input id="name" type="text" class="mt-1 block w-full bg-black border-green-900/30 text-white rounded-xl focus:border-green-500 focus:ring-green-500" wire:model.defer="state.name" autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" class="text-gray-400 font-bold uppercase text-[10px] mb-2" />
            <x-input id="email" type="email" class="mt-1 block w-full bg-black border-green-900/30 text-white rounded-xl focus:border-green-500 focus:ring-green-500" wire:model.defer="state.email" autocomplete="username" />
            <x-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3 text-green-500 font-bold" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <button class="bg-green-500 hover:bg-green-400 text-black font-black px-8 py-2 rounded-xl transition uppercase tracking-widest text-xs">
            {{ __('Save Changes') }}
        </button>
    </x-slot>
</x-form-section>