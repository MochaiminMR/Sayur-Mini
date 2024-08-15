@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex text-lg items-center px-1 pt-1 border-b-2 border-green-400 text-sm font-medium leading-5 text-green-5 focus:outline-none focus:border-green-4 transition duration-150 ease-in-out'
: 'inline-flex text-lg items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-green-5 hover:text-green-700 hover:border-green-300 focus:outline-none focus:text-green-700 focus:border-green-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
