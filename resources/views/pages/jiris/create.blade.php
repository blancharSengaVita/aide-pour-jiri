<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create a new jiri') }}
        </h2>
    </x-slot>

    <livewire:create-jiri />

    <section class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-section-heading-h2>{{ __('Add members and students') }}</x-section-heading-h2>
        <form action="">
            <x-input-text-w-label for="contact-name" id="contact-name" name="contact-name"
                                  placeholder="John Doe">{{ __('Name') }}
            </x-input-text-w-label>
        </form>
    </section>

    <section class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-section-heading-h2>{{ __('Add projects') }}</x-section-heading-h2>
    </section>
</x-app-layout>
