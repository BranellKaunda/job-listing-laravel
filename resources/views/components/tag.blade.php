@props(['tag', 'size' => 'base'])

@php
  $classes = 'transition-colours-300 rounded-xl bg-white/10  font-bold hover:bg-white/25';

  if ($size === 'base') {
      $classes .= ' px-5 py-1 text-sm';
  }

  if ($size === 'small') {
      $classes .= ' px-2 py-1 text-2xs';
  }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
