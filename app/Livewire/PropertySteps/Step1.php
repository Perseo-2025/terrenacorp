<?php

namespace App\Livewire\PropertySteps;

use App\Models\Operacion;
use App\Models\Owner;
use App\Models\SubTipoInmueble;
use App\Models\TipoInmueble;
use Livewire\Component;

class Step1 extends Component
{
    public $titulo = ''; 
    public $owners, $selectedOwner = '';
    public $operaciones, $selectedOperacion = '';
    public $tiposInmuebles, $subTiposInmuebles = [];
    public $selectedTipoInmueble = '', $selectedSubTipoInmueble = '';

    public function mount()
    {
        $this->owners = Owner::pluck('name', 'id'); // Obtiene solo los nombres y los IDs
        $this->operaciones = Operacion::pluck('tipo', 'id');
        $this->tiposInmuebles = TipoInmueble::all();
    }

    public function updatedSelectedTipoInmueble()
    {
        if ($this->selectedTipoInmueble) {
            // Filtra los subtipos de inmueble según el tipo seleccionado
            $this->subTiposInmuebles = SubTipoInmueble::where('tipo_inmueble_id', $this->selectedTipoInmueble)->get();
            
            // Reinicia la selección de subtipos
            $this->selectedSubTipoInmueble = '';

            // Para depuración, muestra los resultados en la pantalla
            dd($this->subTiposInmuebles);
        }
    }


    public function render()
    {
        return view('livewire.property-steps.step1');
    }
}
