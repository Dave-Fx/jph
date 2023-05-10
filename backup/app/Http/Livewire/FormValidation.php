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

        if ($this->medium == "Contacto WEB" || $this->medium == "Contacto WHATSAPP") {
            try{
                Mail::send("emails.notificacionContacto", ["medium" => $this->medium ,"name" => $this->name, "email" => $this->email, "phone" => $this->phone], function ($message) {
                    $message->to("djaramillo@bavpublicidad.com", "ANTILIA96")
                            ->subject("Recibió un nuevo mensaje en la web de contacto")
                            ->bcc('webmaster2@bavpublicidad.com', 'Webmaster Bav');
                });

                Customer::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'location' => $location,
                    'medium' => $this->medium,
                ]);

                if($this->medium == "Contacto WEB"){
                    return redirect()->route('gracias')->with('data', 'web');
                }elseif($this->medium == "Contacto WHATSAPP"){
                    return redirect()->route('gracias')->with('data', $this->name);
                }
            }catch(\Exception $e){
                return $e;
            }
        }
        
    }

    public function location(){
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
