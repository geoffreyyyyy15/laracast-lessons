

@php
$classes =   "block text-left px-3 text-sm leading-5 hover:bg-blue-500 focus-300 hover:text-white focus:text-white"
@endphp
<a {{$attributes->merge(['class' => $classes])}}>
   {{ $slot }}</a>
