@php $field = $attributes->get('for'); @endphp
<div class="flex flex-col">
    <label class="font-bold" for="{{ $field }}">{!! $slot !!}</label>
    <input {{ $attributes->whereDoesntStartWith('for') }}
           class="hover:border-blue-400 placeholder-gray-300 @error($field) border-red-500 focus:border-red-500 @enderror"
        {!! $errors->has($field) ? 'aria-invalid="true"' : '' !!}
    >
    @error($field)
    <x-validation-error :for="$field">{!! $message !!}</x-validation-error>
    @enderror
</div>
