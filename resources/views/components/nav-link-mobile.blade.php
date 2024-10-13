@props(['active' => false])
<a {{ $attributes }} class="{{$active ? "bg-gray-900 text-white" : ''}} block rounded-md px-3 py-2 text-base font-medium text-white"
    {{$active ? 'aria-current=page' : ''}}>
    {{ $slot }}
</a>
