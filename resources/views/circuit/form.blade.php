<x-form-layout>
    <form method="POST" action="{{ route($formAction) }}">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="country" :value="__('Country')" />
            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required />
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="length" :value="__('Length')" />
            <x-text-input id="length" class="block mt-1 w-full" type="text" name="length" :value="old('length')" required />
            <x-input-error :messages="$errors->get('length')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-form-layout>