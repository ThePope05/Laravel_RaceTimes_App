<x-form-layout>
    <form method="POST" action="{{ route($formAction) }}">
        @csrf
        <div>
            <x-input-label for="time" :value="__('Time')" />
            <x-text-input id="time" placeholder="MM:SS:mm" class="block mt-1 w-full" type="text" name="time" :value="old('time')" required autofocus />
            <x-input-error :messages="$errors->get('time')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="circuit_id" :value="__('Circuit')" />
            <select id="circuit_id" class="block mt-1 w-full" name="circuit_id" :value="old('circuit_id')" required>
                <option value="">Select a circuit</option>
                @foreach ($circuits as $circuit)
                <option value="{{ $circuit->id }}">{{ $circuit->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <x-input-label for="car_id" :value="__('Car')" />
            <select id="car_id" class="block mt-1 w-full" name="car_id" :value="old('car_id')" required>
                <option value="">Select a car</option>
                @foreach ($cars as $car)
                <option value="{{ $car->id }}">{{ $car->brand . ' | ' . $car->model }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-form-layout>