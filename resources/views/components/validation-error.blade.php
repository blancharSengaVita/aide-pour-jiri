@props(['for'])
<p class="text-red-500" id="error-message-{{$for}}">
    {!! $slot !!}
</p>
