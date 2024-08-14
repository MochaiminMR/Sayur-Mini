@props(['active'])

@php
$classes = ($active ?? false)
? 'btn btn-ghost outline-none hover:bg-green-1 text-green-4 w-full bg-green-1 focus:bg-green-1 transition duration-150 ease-in-out'
: 'btn btn-ghost outline-none text-green-1 w-full bg-green-4  focus:text-green-4 focus:bg-green-1 transition duration-150 ease-in-out';
@endphp

<div class="flex w-full max-w-48 outline-none">
    <a {{$attributes->merge(['class' => $classes])}}>
        {{$slot}}
    </a>
</div>
