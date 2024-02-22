<x-app-layout>
    <x-slot name="header">
        WELCOME TO RACE TIMES
    </x-slot>

    <x-card-large class="from-purple-600 to-red-600 w-11/12">
        <x-slot name="title">
            FASTEST DRIVER THIS WEEK
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $topLaps['week'][0]->user->name . " | " . $topLaps['week'][0]->lap_time }}</p>
    </x-card-large>

    <x-card-small class="from-yellow-600 to-green-600">
        <x-slot name="title">
            MOST LAPS DRIVEN THIS WEEK
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $mostLaps['week'][0]->user->name . " | " . $mostLaps['week'][0]->count }}</p>
    </x-card-small>

    <x-card-small class="from-blue-700 to-blue-900">
        <x-slot name="title">
            FASTEST CAR THIS WEEK
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $fastestCars['week'][0]->user->name . " | " . $fastestCars['week'][0]->brand }}</p>
    </x-card-small>

    <hr class="w-full border-y-2 mb-16">

    <x-card-large class="from-purple-600 to-red-600 w-11/12">
        <x-slot name="title">
            FASTEST DRIVER EVER
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $topLaps['ever'][0]->user->name . " | " . $topLaps['ever'][0]->lap_time }}</p>
    </x-card-large>

    <x-card-small class="from-yellow-600 to-green-600">
        <x-slot name="title">
            MOST LAPS DRIVEN EVER
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $mostLaps['ever'][0]->user->name . " | " . $mostLaps['ever'][0]->count }}</p>
    </x-card-small>

    <x-card-small class="from-blue-800 to-blue-900">
        <x-slot name="title">
            FASTEST CAR EVER
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $fastestCars['ever'][0]->user->name . " | " . $fastestCars['ever'][0]->brand }}</p>
    </x-card-small>

    <hr class="w-full border-y-2 mb-16">

    <x-card-large class="from-purple-600 to-red-600 w-11/12">
        <x-slot name="title">
            FASTEST DRIVER THIS MONTH
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $topLaps['month'][0]->user->name . " | " . $topLaps['month'][0]->lap_time }}</p>
    </x-card-large>

    <x-card-small class="from-yellow-600 to-green-600">
        <x-slot name="title">
            MOST LAPS DRIVEN THIS MONTH
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $mostLaps['month'][0]->user->name . " | " . $mostLaps['month'][0]->count }}</p>
    </x-card-small>

    <x-card-small class="from-blue-300 to-blue-500">
        <x-slot name="title">
            FASTEST CAR THIS MONTH
        </x-slot>
        <p class="text-3xl text-center font-bold text-white">{{ $fastestCars['month'][0]->user->name . " | " . $fastestCars['month'][0]->brand }}</p>
    </x-card-small>
</x-app-layout>