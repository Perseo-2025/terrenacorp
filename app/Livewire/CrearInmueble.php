<?php

namespace App\Livewire;

use App\Models\Inmueble;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearInmueble extends Component
{
    use WithFileUploads;

    public $step = 1; // Controla la navegación entre pasos

    // Datos del formulario
    public $name, $contact, $tipo_documento, $tipo_operacion, $tipo_inmueble, $subtipo_inmueble;
    public $department, $district, $address, $specific_address;
    public $images = [];
    public $features = [];

    public function nextStep()
    {
        $this->step++;
        $this->dispatch('updateProgressBar', $this->step);
    }

    public function previousStep()
    {
        $this->step--;
        $this->dispatch('updateProgressBar', $this->step);
    }

    public function saveInmueble()
    {
        // Guardar datos en la base de datos sin validaciones obligatorias
        $inmueble = Inmueble::create([
            'name' => $this->name,
            'contact' => $this->contact,
            'tipo_documento' => $this->tipo_documento,
            'tipo_operacion' => $this->tipo_operacion,
            'tipo_inmueble' => $this->tipo_inmueble,
            'subtipo_inmueble' => $this->subtipo_inmueble,
            'department' => $this->department,
            'district' => $this->district,
            'address' => $this->address,
            'specific_address' => $this->specific_address,
        ]);

        // Guardar imágenes si se han subido
        if (!empty($this->images)) {
            foreach ($this->images as $image) {
                $path = $image->store('inmuebles', 'public');
                $inmueble->images()->create(['path' => $path]);
            }
        }

        // Evento para mostrar SweetAlert
        $this->dispatchBrowserEvent('inmuebleCreado');

        // Limpiar los datos después de guardar
        $this->reset();

        // Redirigir a la lista de inmuebles
        return redirect()->route('inmuebles.index');
    }

    public function render()
    {
        return view('livewire.crear-inmueble');
    }
}
