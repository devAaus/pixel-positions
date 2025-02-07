@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm mx-0.5';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-2xs mx-0.5';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">
    {{ ucwords($tag->name) }}
</a>
