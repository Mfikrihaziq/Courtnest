<div class="w-full flex justify-center">
    <x-danger-button
        wire:click="confirmUserDeletion"
        wire:loading.attr="disabled"
        class="rounded-xl px-10 py-3 font-extrabold uppercase tracking-widest"
    >
        Delete Account
    </x-danger-button>

    <!-- Confirmation Modal -->
    <x-dialog-modal wire:model="confirmingUserDeletion">
        <x-slot name="title">
            <span class="font-extrabold text-[#0b1320]">Delete Account</span>
        </x-slot>

        <x-slot name="content">
            <p class="text-slate-600 font-semibold">
                This action cannot be undone. Please enter your password to confirm.
            </p>

            <div class="mt-4">
                <x-input type="password"
                    class="mt-1 block w-3/4 rounded-2xl border-black/10 focus:border-red-500 focus:ring-red-500"
                    placeholder="Password"
                    wire:model.defer="password"
                    wire:keydown.enter="deleteUser" />
                <x-input-error for="password" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                Delete
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
