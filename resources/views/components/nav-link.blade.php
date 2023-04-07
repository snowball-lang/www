@props(['active'])
@props(['docs'])

@php
$classes = ($active ?? false)
            ? 'inline-flex font-bold items-center px-1 pt-1 !text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex font-bold items-center px-1 pt-1 !text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
