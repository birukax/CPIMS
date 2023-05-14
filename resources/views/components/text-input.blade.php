@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-dark dark:focus:border-dark focus:ring-dark dark:focus:ring-dark rounded-md shadow-sm',
]) !!}>
