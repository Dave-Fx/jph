<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class FormValidation extends Component
{
    public $name, $email, $phone, $location, $medium, $tratamiento;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:customer',
        'phone' => 'required|unique:customer',
        'medium' => 'required',
        'tratamiento' => 'accepted',
    ];

    public function submitForm()
    {
        dd('Hola');
        $this->validate();

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'location' => $this->location,
            'medium' => $this->medium,
        ]);

        return back()->with('success','Item created successfully!');
    }
}
