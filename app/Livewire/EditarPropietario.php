<?php

namespace App\Livewire;

use App\Models\Owner;
use Livewire\Component;
use Illuminate\Validation\Rule;

class EditarPropietario extends Component
{
    public $owner;
    public $name;
    public $contact;
    public $tipo_documento;
    public $numero_documento;
    public $telefono_fijo;
    public $celular;
    public $email;
    public $others;

    protected function rules()
    {
        return [
            'name' => ['nullable', 'string', 'min:3', 'max:255'],
            'contact' => ['nullable', 'string', 'max:255'],
            'tipo_documento' => ['nullable', Rule::in(['DNI', 'RUC'])],
            'numero_documento' => ['nullable', 'string', 'max:15', Rule::unique('owners', 'numero_documento')->ignore($this->owner->id)],
            'telefono_fijo' => ['nullable', 'string', 'max:15'],
            'celular' => ['nullable', 'string', 'max:15'],
            'email' => ['nullable', 'email', Rule::unique('owners', 'email')->ignore($this->owner->id)],
            'others' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function mount(Owner $owner)
    {
        $this->owner = $owner;

        // Cargar datos en el formulario
        $this->name = $owner->name;
        $this->contact = $owner->contact;
        $this->tipo_documento = $owner->tipo_documento;
        $this->numero_documento = $owner->numero_documento;
        $this->telefono_fijo = $owner->telefono_fijo;
        $this->celular = $owner->celular;
        $this->email = $owner->email;
        $this->others = $owner->others;
    }

    public function updateOwner()
    {
        $this->validate();

        // Actualizar los datos en la base de datos
        $this->owner->update([
            'name' => $this->name,
            'contact' => $this->contact,
            'tipo_documento' => $this->tipo_documento,
            'numero_documento' => $this->numero_documento,
            'telefono_fijo' => $this->telefono_fijo,
            'celular' => $this->celular,
            'email' => $this->email,
            'others' => $this->others,
        ]);

        // Emitir evento para mostrar SweetAlert2 y redirigir después de 3 segundos
        $this->dispatch('propietarioActualizado', route('propietarios.index'));
    }

    public function render()
    {
        return view('livewire.editar-propietario');
    }
}
