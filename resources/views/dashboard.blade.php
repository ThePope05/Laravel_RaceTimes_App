<x-app-layout>
    <x-slot name="header">
        YOUR DASHBOARD
    </x-slot>

    <x-card-small class="from-amber-600 to-pink-600 justify-between">
        <x-button route="{{ isset($topLaps[0]) ? route('time.show', $topLaps[0]->id) : '' }}">
            <h1 class="w-full h-full text-center text-3xl">YOUR BEST TIME</h1>
        </x-button>
        <p class="text-center text-xl">{{ isset($topLaps[0]) ? $topLaps[0]->car->brand . ' | ' . $topLaps[0]->car->model : '' }}</p>
        <p class="text-center text-2xl font-semibold">{{ isset($topLaps[0]) ? $topLaps[0]->lap_time : 'No times yet' }}</p>
        <p class="text-center text-xl">{{ isset($topLaps[0]) ? $topLaps[0]->circuit->name : '' }}</p>
    </x-card-small>

    <x-card-small class="bg-gradient-to-br from-green-500 to-green-900 justify-between">
        <x-button route="{{ !is_null($lastLap) ? route('time.show', $lastLap->id) : '' }}">
            <h1 class="w-full h-full text-center text-3xl">LAST LAP</h1>
        </x-button>

        <p class="text-center text-xl">{{ !is_null($lastLap) ? $lastLap->car->brand . ' | ' . $lastLap->car->model : '' }}</p>
        <p class="text-center text-2xl font-semibold">{{ !is_null($lastLap) ? $lastLap->lap_time : 'No times yet' }}</p>
        <p class="text-center text-xl">{{ !is_null($lastLap) ? $lastLap->circuit->name : '' }}</p>
    </x-card-small>

    <x-card-small class="bg-gradient-to-t from-blue-500 to-blue-900 justify-between">
        <x-button route="{{ !is_null($mostUsedCar) ? route('car.index') : '' }}">
            <h1 class="w-full h-full text-center text-3xl">YOUR MOST USED CAR</h1>
        </x-button>

        <p class="text-center text-2xl font-semibold">{{ !is_null($mostUsedCar) ? $mostUsedCar->brand . ' | ' . $mostUsedCar->model : 'No cars yet' }}</p>
    </x-card-small>

    <x-card-small class="bg-gradient-to-t from-purple-500 to-purple-900 justify-between">
        <x-button route="{{ route('circuit.index') }}">
            <h1 class="w-full h-full text-center text-3xl">YOUR MOST DRIVEN TRACK</h1>
        </x-button>
        <p class="text-center text-2xl font-semibold">{{ $mostDrivenTrack->name ?? 'No tracks yet' }}</p>
    </x-card-small>

    <x-card-large class="justify-between">
        <x-button route="{{ route('time.index') }}">
            <h1 class="w-full h-full text-center text-3xl">YOUR FASTEST LAPS</h1>
        </x-button>
        @if (count($topLaps) > 0)
        @foreach ($topLaps as $lap)
        <div class="flex flex-col 3/5 p-4">
            <p class="text-center text-xl">{{ $lap->car->brand . ' | ' . $lap->car->model ?? '' }}</p>
            <a href="{{ route('time.show', $lap->id) }}" class="text-center text-2xl font-semibold text-slate-300">{{ $lap->lap_time ?? 'No times yet' }}</a>
            <p class="text-center text-xl">{{ $lap->circuit->name ?? '' }}</p>
        </div>
        @endforeach
        @else
        <p class="text-center text-2xl font-semibold">No times yet</p>
        @endif
    </x-card-large>
</x-app-layout>