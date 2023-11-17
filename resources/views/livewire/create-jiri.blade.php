<section class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <x-section-heading-h2>{!! __('pages/jiri-create.about.your.jiri') !!}</x-section-heading-h2>
    <div>
        <form wire:submit.prevent="save"
              class="flex flex-col gap-4">

            <div>
                <x-input-text-w-label type="text"
                                      for="name"
                                      id="name"
                                      placeholder="Jiri name"
                                      wire:model="name"
                                      dusk="name">
                    {!! __('forms/labels/jiri.name') !!}
                </x-input-text-w-label>
            </div>

            <div>
                <x-input-text-w-label type="text"
                                      for="starting_at"
                                      id="starting_at"
                                      placeholder="{{ now()->format('Y-m-d H:i') }}"
                                      dusk="starting_at"
                                      wire:model="starting_at">
                    {!! __('forms/labels/jiri.starting_at') !!}
                </x-input-text-w-label>
            </div>

            <div>
                <x-input-text-w-label type="number"
                                      for="duration"
                                      id="duration"
                                      placeholder="60"
                                      wire:model="duration"
                                      dusk="duration">
                    {!! __('forms/labels/jiri.duration') !!}
                </x-input-text-w-label>
            </div>


            <div class="flex flex-row-reverse items-center gap-4">
                <x-form-button
                    type="submit"
                    dusk="{{ 'savejiri' }}">
                    {{ __('forms/controls/jiri.save') }}
                </x-form-button>
                @if(session('jiri-message'))
                    <x-notification>{!! session('jiri-message') !!}</x-notification>
                @endif
            </div>

        </form>
    </div>
</section>
