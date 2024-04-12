<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Your Shipping Address') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's address to change the shipping destination.") }}
        </p>
        <p class="mt-1 text-sm text-gray-600"><span style="color: red;">*</span>
            {{ __("If your shipping address or phone number is incorrect, your order will be suspended. Please ensure that your address and phone number are accurate to avoid any delays in processing your order.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.updateAddrPh') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="address" :value="__('Address')" />

            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)"
                required autofocus autocomplete="address" />

            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="phone" :value="__('Phone')" />

            <x-text-input id="phone" name="phone" type="tel" class="mt-1 block w-full" :value="old('phone', $user->phone_number)"
                required autofocus autocomplete="phone" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" />

            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
