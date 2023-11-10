<div class="flex flex-col">
    <label class="font-bold" for="{{ $attributes->get('for') }}">{{$slot}}</label>
    <input class="p-2 border" {{ $attributes->whereDoesntStartWith('for') }}>
</div>
