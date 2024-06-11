<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;

class AuthorFooter extends Component
{
    public $settings;

    protected $listeners = [
        'updateAuthorFooter' => '$refreshPage',
    ];

    public function refreshPage()
    {
        $this->emit('refreshPage'); // Emit another event to be caught by JavaScript
    }

    public function mount()
    {
        $this->settings = Setting::find(1);
    }

    public function render()
    {
        return view('livewire.author-footer');
    }
}
