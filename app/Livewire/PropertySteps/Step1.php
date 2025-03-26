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
        // Cargar datos en Livewire al inicio
        $this->owners = Owner::pluck('name', 'id')->toArray();
        $this->operaciones = Operacion::pluck('tipo', 'id')->toArray();
        $this->tiposInmuebles = TipoInmueble::all();
    }

    public function cargarSubtipos()
    {
        if (!empty($this->selectedTipoInmueble)) {
            $this->subTiposInmuebles = SubTipoInmueble::where('tipo_inmueble_id', $this->selectedTipoInmueble)->get(); // ⚠️ NO USAR toArray()
            logger("✅ Subtipos encontrados: " . json_encode($this->subTiposInmuebles));
            $this->selectedSubTipoInmueble = ''; // Reinicia la selección de subtipo
        } else {
            $this->subTiposInmuebles = collect(); // Mantenerlo como una colección vacía
            logger("⚠️ No se encontraron subtipos.");
        }

        $this->dispatch('refreshComponent'); // Para forzar actualización en Livewire
    }
    
    public function render()
    {
        return view('livewire.property-steps.step1');
    }
}
