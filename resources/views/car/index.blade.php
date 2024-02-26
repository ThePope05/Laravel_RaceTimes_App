<x-app-layout>
    <x-slot name="header">
        YOUR CARS
    </x-slot>

    @if ($cars->count() > 0)
    @foreach ($cars as $car)
    <x-card-small colors="bg-gradient-to-br from-slate-500 to-slate-800">
        <x-button route="{{ route('car.show', $car->id) }}">
            <h1 class="w-full h-full text-center text-2xl">{{ $car->brand . ' | ' . $car->model }}</h1>
        </x-button>
        <p class="mt-2 w-full font-bold text-center">{{ $car->year }}</p>
        <p class="mt-2 w-full font-bold text-center">HP/KG: {{ round($car->power / $car->weight, 2) }}</p>
    </x-card-small>
    @endforeach
    <x-card-large colors="bg-gradient-to-br from-slate-500 to-slate-800">
        <x-button route="{{ route('car.create') }}">
            ADD A NEW CAR
        </x-button>
    </x-card-large>
    @else
    <x-card-small colors="bg-gradient-to-br from-slate-500 to-slate-800">
        <x-slot name="title">
            NO CARS
        </x-slot>
    </x-card-small>

    <x-card-small colors="bg-gradient-to-br from-slate-500 to-slate-800">
        <x-button route="{{ route('car.create') }}">
            ADD A NEW CAR
        </x-button>
    </x-card-small>
    @endif
</x-app-layout>