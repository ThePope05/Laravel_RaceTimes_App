<x-app-layout>
    <x-slot name="header">
        {{ $circuit->name }}
    </x-slot>

    <x-card-small>
        <x-slot name="title">{{ $circuit->country . " | " . $circuit->length }}km</x-slot>
    </x-card-small>

    <x-card-small>
        <x-slot name="title">Lap record: {{ (!is_null($topLapTime)) ? $topLapTime->lap_time : 'No laps for this circuit' }}</x-slot>
    </x-card-small>

    <x-card-large>
        <x-button route="{{ route('circuit.edit', $circuit->id) }}">
            Edit
        </x-button>
        <x-button route="{{ route('circuit.destroy', $circuit->id) }}">
            Delete
        </x-button>
    </x-card-large>
</x-app-layout>