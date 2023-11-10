<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new jiri') }}
        </h2>
    </x-slot>
    <section class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <x-section-heading-h2>About your Jiri</x-section-heading-h2>
        <div>
            <form action="{{ route('jiris.store') }}" method="post" class="flex flex-col gap-4">
                @csrf
                <x-input-text-w-label for="jiri-name" id="jiri-name" name="jiri-name" placeholder="Jiri name">Name
                </x-input-text-w-label>
                <x-input-text-w-label type="datetime-local" for="starting_at" id="starting_at" name="starting_at">
                    Starting date and time
                </x-input-text-w-label>
                <x-input-text-w-label type="number" name="duration" for="duration" id="duration" min="1" max="480"
                                      value="1">Duration in minutes
                </x-input-text-w-label>
                <x-form-button>Save this Jiri</x-form-button>

            </form>
        </div>
    </section>
    <section class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <x-section-heading-h2>Add members and students</x-section-heading-h2>
        <form action="">
            <x-input-text-w-label for="contact-name" id="contact-name" name="contact-name" placeholder="John Doe">Name
            </x-input-text-w-label>
        </form>
    </section>
    <section class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <x-section-heading-h2>Add projects</x-section-heading-h2>
    </section>
</x-app-layout>
