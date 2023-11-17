<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateJiri extends Component
{
    #[Rule('required|min:5')]
    public $name = '';

    #[Rule('required|date_format:Y-m-d H:i')]
    public $starting_at = null;

    #[Rule('required|integer|min:1')]
    public $duration;

    public int $jiriId;

    public function mount(): void
    {
        $this->jiriId = 0;
    }

    public function save(): void
    {
        $this->validate();

        $this->jiriId = auth()
            ->user()
            ?->jiris()
            ->updateOrCreate(
                ['id' => $this->jiriId],
                [
                    'name' => $this->name,
                    'starting_at' => $this->starting_at,
                    'duration' => $this->duration
                ]
            )->id;
    }

    public function render(): View|Factory
    {
        return view('livewire.create-jiri');
    }
}
