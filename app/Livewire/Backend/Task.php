<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class Task extends Component
{
    public $uuid;
    public $user_id;
    public $name;
    public $description;
    public $status;
    public $expiration_date;

    public function render()
    {
        return view('livewire.backend.task');
    }
}
