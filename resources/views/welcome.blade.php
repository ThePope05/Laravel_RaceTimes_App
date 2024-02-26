<x-app-layout>
    <x-slot name="header">
        WELCOME TO RACE TIMES
    </x-slot>

    <x-card-large colors="bg-gradient-to-bl from-purple-600 to-red-600">
        <x-slot name="title">
            FASTEST DRIVER THIS WEEK
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $topLaps['week'][0]->user->name . " | " . $topLaps['week'][0]->lap_time . " | " . $topLaps['week'][0]->circuit->name }}</p>
    </x-card-large>

    <x-card-small colors="bg-gradient-to-tr from-yellow-600 to-green-600">
        <x-slot name="title">
            MOST LAPS DRIVEN THIS WEEK
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $mostLaps['week'][0]->user->name . " | " . $mostLaps['week'][0]->count }}</p>
    </x-card-small>

    <x-card-small colors="bg-gradient-to-tl from-blue-700 to-blue-900">
        <x-slot name="title">
            FASTEST CAR THIS WEEK
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $fastestCars['week'][0]->user->name . " | " . $fastestCars['week'][0]->brand }}</p>
    </x-card-small>

    <hr class="w-full border-y-2 mb-16">

    <x-card-large colors="bg-gradient-to-l from-purple-600 to-red-600">
        <x-slot name="title">
            FASTEST DRIVER EVER
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $topLaps['ever'][0]->user->name . " | " . $topLaps['ever'][0]->lap_time . " | " . $topLaps['week'][0]->circuit->name }}</p>
    </x-card-large>

    <x-card-small colors="bg-gradient-to-l from-blue-300 to-blue-900">
        <x-slot name="title">
            MOST LAPS DRIVEN EVER
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $mostLaps['ever'][0]->user->name . " | " . $mostLaps['ever'][0]->count }}</p>
    </x-card-small>

    <x-card-small colors="bg-gradient-to-t from-yellow-700 to-slate-500">
        <x-slot name="title">
            FASTEST CAR EVER
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $fastestCars['ever'][0]->user->name . " | " . $fastestCars['ever'][0]->brand }}</p>
    </x-card-small>

    <hr class="w-full border-y-2 mb-16">

    <x-card-large colors="bg-gradient-to-t from-orange-600 to-pink-600 w-11/12">
        <x-slot name="title">
            FASTEST DRIVER THIS MONTH
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $topLaps['month'][0]->user->name . " | " . $topLaps['month'][0]->lap_time . " | " . $topLaps['week'][0]->circuit->name }}</p>
    </x-card-large>

    <x-card-small colors="bg-gradient-to-bl from-yellow-600 to-green-600">
        <x-slot name="title">
            MOST LAPS DRIVEN THIS MONTH
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $mostLaps['month'][0]->user->name . " | " . $mostLaps['month'][0]->count }}</p>
    </x-card-small>

    <x-card-small colors="bg-gradient-to-tr from-blue-300 to-blue-500">
        <x-slot name="title">
            FASTEST CAR THIS MONTH
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $fastestCars['month'][0]->user->name . " | " . $fastestCars['month'][0]->brand }}</p>
    </x-card-small>
</x-app-layout>