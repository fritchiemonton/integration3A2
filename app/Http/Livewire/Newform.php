<?php

namespace App\Http\Livewire;

use Livewire\Component;

class bookswire extends Component
{
    public $studentId;
    public $name;
    public $title;
    public $showModal = false; // Initialize to false if you want the modal to be closed initially

    public function render()
    {
        return view('livewire.bookswire');
    }

    public function resetForm()
    {
        $this->studentId = '';
        $this->name = '';
        $this->title = '';
    }

    public function borrow()
    {
        // Your borrow logic here
        // Once the borrowing is successful, you can close the modal
        $this->showModal = false;
    }

    public function closeForm()
    {
        // Method to close the modal
        $this->resetForm(); // Optionally reset form fields when closing
        $this->showModal = false;
    }
}
