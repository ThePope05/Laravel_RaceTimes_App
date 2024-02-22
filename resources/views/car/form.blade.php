<x-form-layout>
    <form method="POST" action="{{ route($formAction) }}">
        @csrf
        <div>
            <x-input-label for="brand" :value="__('Brand')" />
            <x-text-input id="brand" class="block mt-1 w-full" type="text" name="brand" :value="old('brand')" required autofocus />
            <x-input-error :messages="$errors->get('brand')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="model" :value="__('Model')" />
            <x-text-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')" required />
            <x-input-error :messages="$errors->get('model')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="year" :value="__('Year')" />
            <x-text-input id="year" class="block mt-1 w-full" type="number" name="year" :value="old('year')" required />
            <x-input-error :messages="$errors->get('year')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="power" :value="__('Power')" />
            <x-text-input id="power" class="block mt-1 w-full" type="number" name="power" :value="old('power')" required />
            <x-input-error :messages="$errors->get('power')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="torque" :value="__('Torque')" />
            <x-text-input id="torque" class="block mt-1 w-full" type="number" name="torque" :value="old('torque')" required />
            <x-input-error :messages="$errors->get('torque')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="weight" :value="__('Weight')" />
            <x-text-input id="weight" class="block mt-1 w-full" type="number" name="weight" :value="old('weight')" required />
            <x-input-error :messages="$errors->get('weight')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-form-layout>