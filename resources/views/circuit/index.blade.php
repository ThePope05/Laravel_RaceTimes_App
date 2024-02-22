<x-app-layout>
    <x-slot name="header">
        CIRCUITS
    </x-slot>

    <div class="container mx-auto h-max">
        <div class="flex justify-center flex-wrap h-full pt-16">
            @if ($circuits->count())
            @foreach ($circuits as $circuit)
            <x-card-small>
                <a href="{{ route('circuit.show', $circuit->id) }}" class="bg-slate-900 text-slate-600 font-bold w-3/5 mx-auto py-2 text-center rounded-lg hover:text-slate-500 transition-colors">
                    {{ $circuit->name }}
                </a>
                <p class="mt-2 w-full text-center">{{ $circuit->country }}</p>
            </x-card-small>
            @endforeach
            @else
            <div class="m-4 w-full h-48 flex flex-col justify-center align-middle bg-gradient-to-tr from-slate-700 to-slate-900 rounded-lg hover:scale-105 transition-transform">
                <p>There are no circuits</p>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>