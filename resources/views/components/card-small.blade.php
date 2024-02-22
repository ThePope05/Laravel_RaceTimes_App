@php
$class = 'p-4 m-4 mb-16 w-2/5 min-h-48 h-max flex flex-col justify-center align-middle bg-gradient-to-tr from-slate-700 to-slate-900 rounded-lg hover:scale-105 transition-transform ';
if (isset($attributes['class'])){
$attributes['class'] = $class . $attributes['class'];
} else {
$attributes['class'] = $class;
}
@endphp

<div class="{{ $attributes['class'] }}">
    {{ $slot }}
</div>