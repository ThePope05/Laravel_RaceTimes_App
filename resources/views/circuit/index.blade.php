<x-app-layout>
    <x-slot name="header">
        CIRCUITS
    </x-slot>

    @if ($circuits->count())
    @foreach ($circuits as $circuit)
    <x-card-small>
        <x-button route="{{ route('circuit.show', $circuit->id) }}">
            {{ $circuit->name }}
        </x-button>
        <p class="mt-2 w-full text-center">{{ $circuit->country }}</p>
    </x-card-small>
    @endforeach
    @else
    <div class="m-4 w-4/5 h-48 flex flex-col justify-center align-middle bg-gradient-to-tr from-slate-700 to-slate-900 rounded-lg hover:scale-105 transition-transform">
        <p>There are no circuits</p>
    </div>
    @endif

    <x-card-large>
        <a href="{{ route('circuit.create') }}" class="bg-slate-900 text-slate-600 font-bold w-3/5 mx-auto py-2 text-center rounded-lg hover:text-slate-500 transition-colors">
            Create a new circuit
        </a>
    </x-card-large>
</x-app-layout>