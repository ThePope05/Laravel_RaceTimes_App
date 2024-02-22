<x-app-layout>
    <x-slot name="header">
        All YOUR TIMES
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
    <div class="m-4 w-4/5 h-48 flex flex-col justify-center align-middle bg-gradient-to-tr from-slate-700 to-slate-900 rounded-lg hover:scale-105 transition-transform">
        <p>There are no lap times</p>
    </div>
    @endif
</x-app-layout>