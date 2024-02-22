<x-app-layout>
    <x-slot name="header">
        CIRCUITS
    </x-slot>

    @if ($circuits->count())
    @foreach ($circuits as $circuit)
    <x-card-small class="from-slate-600">
        <x-button route="{{ route('circuit.show', $circuit->id) }}">
            <h1 class="w-full h-full text-center text-2xl">{{ $circuit->name }}</h1>
        </x-button>
        <p class="mt-2 w-full font-bold text-center">{{ $circuit->country }}</p>
    </x-card-small>
    @endforeach
    @else
    <div class="m-4 w-4/5 h-48 flex flex-col justify-center align-middle bg-gradient-to-tr from-slate-700 to-slate-900 rounded-lg hover:scale-105 transition-transform">
        <p>There are no circuits</p>
    </div>
    @endif

    <x-card-large>
        <x-button route="{{ route('circuit.create') }}">
            Create a new circuit
        </x-button>
    </x-card-large>
</x-app-layout>