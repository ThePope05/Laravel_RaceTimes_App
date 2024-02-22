<x-app-layout>
    <x-slot name="header">
        {{ strtoupper(Auth::user()->name) }}
    </x-slot>

    <x-card-small>
        @include('profile.partials.update-password-form')
    </x-card-small>

    <x-card-small>
        @include('profile.partials.update-profile-information-form')
        <hr class="my-4">
        @include('profile.partials.delete-user-form')
    </x-card-small>

</x-app-layout>