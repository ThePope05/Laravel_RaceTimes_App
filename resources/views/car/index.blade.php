<x-app-layout>
    <x-slot name="header">
        YOUR CARS
    </x-slot>

    @foreach ($cars as $car)
    <x-card-small>
        <x-button route="{{ route('car.show', $car->id) }}">
            <h1 class="w-full h-full text-center text-lg">{{ $car->brand . ' | ' . $car->model }}</h1>
        </x-button>
        <p class="text-center text-xl">{{ $car->year }}</p>
        <p class="text-center text-xl">HP/KG: {{ round($car->power / $car->weight, 2) }}</p>
    </x-card-small>
    @endforeach

    <x-card-large>
        <x-button route="{{ route('car.create') }}">
            <h1 class="w-full h-full text-center text-lg">ADD A NEW CAR</h1>
        </x-button>
    </x-card-large>
</x-app-layout>