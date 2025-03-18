<?php

namespace App\Livewire;

use App\Models\Owner;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CrearPropietario extends Component
{
    public $name;
    public $contact;
    public $tipo_documento;
    public $numero_documento;
    public $telefono_fijo;
    public $celular;
    public $email;
    public $others; 

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'contact' => 'required|string|max:255',
        'tipo_documento' => 'required|in:DNI,RUC',
        'numero_documento' => 'required|string|max:15|unique:owners,numero_documento',
        'telefono_fijo' => 'nullable|string|max:15',
        'celular' => 'required|string|max:15',
        'email' => 'required|email|unique:owners,email',
        'others' => 'nullable|string|max:500', 
    ];

    public function crearPropietario()
    {
        $this->validate(); // Validamos los datos antes de insertarlos

        Owner::create([
            'name' => $this->name,
            'contact' => $this->contact,
            'tipo_documento' => $this->tipo_documento,
            'numero_documento' => $this->numero_documento,
            'telefono_fijo' => $this->telefono_fijo,
            'celular' => $this->celular,
            'email' => $this->email,
            'others' => $this->others, // Guardamos el nuevo campo
            'status' => 1, // Activo por defecto
            'users_id' => Auth::id(),
        ]);

        // Limpiar campos después del registro
        $this->reset();

        // Emitir evento para mostrar SweetAlert2 en Livewire v3
        $this->dispatch('propietarioCreado');;

        return redirect()->route('propietarios.create');

    }

    public function render()
    {
        return view('livewire.crear-propietario');
    }
}
