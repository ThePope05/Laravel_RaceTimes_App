<x-app-layout>
    <x-slot name="header">
        {{ $time->lap_time }}
    </x-slot>

    <x-card-small>
        <x-slot name="title">{{ $time->circuit->name . ' | ' . $time->circuit->length }}km</x-slot>
        <p class="mt-2 w-full font-bold text-center text-slate-100">Driven in: {{ $time->car->brand . ' | ' . $time->car->model }}</p>
    </x-card-small>

    <x-card-small>
        <x-slot name="title">{{ $time->circuit->name }} leaderboard</x-slot>
        @foreach ($topLapTimes as $topLapTime)
        @if ($topLapTime->id === $time->id)
        <p class="mt-2 w-full font-black underline text-center text-slate-100">{{ $loop->iteration }}. {{ $topLapTime->lap_time }} - {{ $topLapTime->car->brand . ' | ' . $topLapTime->car->model }} - {{ $topLapTime->user->name }}</p>
        @else
        <p class="mt-2 w-full text-center text-slate-100">{{ $loop->iteration }}. {{ $topLapTime->lap_time }} - {{ $topLapTime->car->brand . ' | ' . $topLapTime->car->model }} - {{ $topLapTime->user->name }}</p>
        @endif
        @endforeach
    </x-card-small>
</x-app-layout>