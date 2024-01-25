<?php

namespace App\Livewire\Aplication\Task;

use Livewire\Component;

class FormTask extends Component
{
    public $uuid;
    public $user_id;
    public $name;
    public $description;
    public $status;
    public $expiration_date;

    public function save(){
        if (!empty($this->uuid)) {
            #update
        }{
            #create
        }
    }
    public function render()
    {
        return view('livewire.aplication.task.form-task');
    }
}
