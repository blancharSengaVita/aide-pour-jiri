<section class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <x-section-heading-h2>{{ __('About your Jiri') }}</x-section-heading-h2>
    <div>
        <form wire:submit.prevent="save" class="flex flex-col gap-4">
            <x-input-text-w-label
                    for="jiri-name" id="jiri-name" placeholder="Jiri name"
                    wire:model="name">
                {{ __('Name') }}
            </x-input-text-w-label>
            @error('name')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            <x-input-text-w-label
                    for="starting_at" id="starting_at" placeholder="{{ now()->format('Y-m-d H:i') }}"
                    wire:model="starting_at">
                {{ __('Starting date and time') }}
            </x-input-text-w-label>
            @error('starting_at')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            <x-input-text-w-label
                    type="number" for="duration" id="duration" min="1" max="480" placeholder="60"
                    wire:model="duration">
                {{ __('Duration in minutes') }}
            </x-input-text-w-label>
            @error('duration')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            <x-form-button type="submit">
                {{ __('Save this Jiri') }}
            </x-form-button>

        </form>
    </div>
</section>
