@php
  $classes =
      'group mt-4 rounded-xl border border-transparent bg-white/5 p-4 transition-colors duration-300 hover:border-blue-800';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</div>
