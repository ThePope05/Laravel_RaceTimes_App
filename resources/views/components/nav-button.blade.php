@props(['active'])

@php
$classes = ($active ?? false)
? 'block w-full px-4 py-2 mr-6 text-start text-sm leading-5 text-gray-300 dark:text-gray-300 hover:bg-gray-100 rounded dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out'
: 'block w-full px-4 py-2 mr-6 text-start text-sm leading-5 text-gray-300 dark:text-gray-300 bg-amber-600 rounded dark:hover:bg-amber-700 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>