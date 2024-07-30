<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT') <!-- Menambahkan metode PUT di sini -->

        <div class="flex flex-col gap-8">
            <!-- Old Password -->
            <div>
                <x-input-label for="current_password" :value="__('Old Password')" />

                <x-text-input id="current_password" class="block mt-1 w-full" type="password" name="current_password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
            </div>

            <!-- New Password -->
            <div>
                <x-input-label for="new_password" :value="__('New Password')" />

                <x-text-input id="new_password" class="block mt-1 w-full" type="password" name="new_password" required />

                <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
            </div>

            <!-- Confirm New Password -->
            <div>
                <x-input-label for="new_password_confirmation" :value="__('Confirm New Password')" />

                <x-text-input id="new_password_confirmation" class="block mt-1 w-full" type="password" name="new_password_confirmation" required />
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
