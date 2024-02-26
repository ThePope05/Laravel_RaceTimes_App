<x-app-layout>
    <x-slot name="header">
        CIRCUITS
    </x-slot>

    @if ($circuits->count())
    @foreach ($circuits as $circuit)
    <x-card-small colors="bg-gradient-to-br from-slate-500 to-slate-800">
        <x-button route="{{ route('circuit.show', $circuit->id) }}">
            <h1 class="w-full h-full text-center text-2xl">{{ $circuit->name }}</h1>
        </x-button>
        <p class="mt-2 w-full font-bold text-center">{{ $circuit->country }}</p>
    </x-card-small>
    @endforeach
    @else
    <x-card-large>
        <x-slot name="title">
            NO CIRCUITS YET
        </x-slot>
    </x-card-large>
    @endif

    <x-card-large colors="bg-gradient-to-br from-slate-500 to-slate-800">
        <x-button route="{{ route('circuit.create') }}">
            Create a new circuit
        </x-button>
    </x-card-large>
</x-app-layout>