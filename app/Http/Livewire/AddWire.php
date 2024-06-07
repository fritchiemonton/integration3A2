<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Borrows;

class AddWire extends Component
{
    public $isOpen = false; // Control the visibility of the modal
    public $studentId;
    public $name;
    public $title;

    protected $rules = [
        'studentId' => 'required',
        'name' => 'required',
        'title' => 'required',
    ];

    public function render()
    {
        $borrows = Borrows::all(); // Fetch the Borrows data
    
        return view('livewire.add-wire', ['borrows' => $borrows]); // Pass it to the view
    }

    public function resetForm()
    {
        $this->studentId = '';
        $this->name = '';
        $this->title = '';
    }

    public function saveBook()
    {
        $this->validate();

        Borrows::create([
            'studentId' => $this->studentId,
            'name' => $this->name,
            'title' => $this->title,
        ]);

        $this->resetForm();
        $this->isOpen = false;
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeForm()
    {
        $this->isOpen = false;
    }

    public function borrow()
    {
        // Handle the borrow logic here
        // Validate and save the data to the database

        // After successful borrow, close the modal
        $this->closeForm();
    }
}
