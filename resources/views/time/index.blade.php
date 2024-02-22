<x-app-layout>
    <x-slot name="header">
        YOUR TIMES
    </x-slot>

    @if ($times->count())
    @foreach ($times as $time)
    <x-card-small>
        <x-button route="{{ route('time.show', $time->id) }}">
            {{ $time->lap_time }}
        </x-button>
        <p class="mt-2 w-full text-center">{{ $time->car->brand . " | " . $time->car->model }}</p>
        <p class="mt-2 w-full text-center">{{ $time->circuit->name . " | " . $time->circuit->country }}</p>
    </x-card-small>
    @endforeach
    @else
    <x-card-small>
        <x-slot name="title">
            NO TIMES YET
        </x-slot>
    </x-card-small>

    <x-card-small>
        <x-button route="{{ route('time.create') }}">
            ADD A NEW TIME
        </x-button>
    </x-card-small>
    @endif
</x-app-layout>