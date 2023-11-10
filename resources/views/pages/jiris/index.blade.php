<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Jiris') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-4">
            @unless(empty($jiris))
                <ul class="flex flex-col gap-4">
                    @foreach($jiris as $jiri)
                        <li><a href="/jiris/{{$jiri->id}}/edit/" class="underline">{{ $jiri->name }}</a></li>
                    @endforeach
                </ul>
            @endunless
            <p><a href="/jiris/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Create a new jiri')}}</a></p>
        </div>
    </div>

</x-app-layout>
