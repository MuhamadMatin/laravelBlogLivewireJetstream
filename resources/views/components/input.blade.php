@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-indigo-300 focus:ring-teal-300 rounded-md shadow-sm',
]) !!}>
