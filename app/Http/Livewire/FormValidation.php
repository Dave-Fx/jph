<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormValidation extends Component
{
    public $name, $email, $phone, $location, $medium, $tratamiento;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:customers',
        'phone' => 'required|unique:customers',
        'medium' => 'required',
        'tratamiento' => 'accepted',
    ];

    public function submitForm()
    {
        $this->validate();
        $location = $this->location();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'location' => $location,
            'medium' => $this->medium,
        ];

        if ($this->medium == "Contacto WEB" || $this->medium == "Contacto WHATSAPP") {
            try {

                return redirect()->route('gracias')->with('name', $this->name)->with('phone', $this->phone)->with('email', $this->email)->with('medium', $this->medium);

                // return redirect()->route('gracias', [
                //     'name' => $this->name,
                //     'email' => $this->email,
                //     'phone' => $this->phone,
                //     'location' => $location,
                //     'medium' => $this->medium,
                // ]);
            } catch (\Exception $e) {
                return $e;
            }
        }
    }

    public function location()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip), true);
        $location = $dataArray["geoplugin_countryCode"] . ' - ' . $dataArray["geoplugin_request"];
        return $location;
    }

    public function render()
    {
        return view('livewire.form-validation');
    }
}
