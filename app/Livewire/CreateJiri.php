<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateJiriForm;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateJiri extends Component
{
    #[Rule('required|min:5')]
    public $name = '';

    #[Rule('required')]
    public $starting_at = null;

    #[Rule('required|integer|min:1')]
    public $duration;

    public function save(): void
    {
        $this->validate();

        auth()->user()?->jiris()->create([
            'name' => $this->name,
            'starting_at' => $this->starting_at,
            'duration' => $this->duration,
        ]);
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->name = '';
        $this->starting_at = null;
        $this->duration = 1;
    }

    public function render()
    {
        return view('livewire.create-jiri');
    }
}
