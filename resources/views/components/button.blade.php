@php
$class = 'bg-slate-900 text-slate-100 font-bold w-3/5 mx-auto py-2 text-center rounded-lg hover:text-amber-500 transition-colors ';

if (isset($attributes['class'])) {
$class = $class . $attributes['class'];
}
@endphp

<a href="{{ $attributes['route'] }}" class="{{ $class }}">
    {{ $slot }}
</a>