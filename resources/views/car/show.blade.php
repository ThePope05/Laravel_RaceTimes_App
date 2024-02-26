<x-app-layout>
    <x-slot name="header">
        {{ $car->brand . ' | ' . $car->model }}
    </x-slot>

    <x-card-small>
        <x-slot name="title">{{ $car->power . "PK | " . $car->torque }}NM</x-slot>
    </x-card-small>

    <x-card-small>
        <x-slot name="title">
            <x-button route="{{ (!is_null($fastestLap)) ? route('time.show', $fastestLap->id) : '' }}">
                Car record: {{ (!is_null($fastestLap)) ? $fastestLap->lap_time . ' | ' . $fastestLap->circuit->name : 'No laps for this car' }}
            </x-button>
        </x-slot>
    </x-card-small>
</x-app-layout>