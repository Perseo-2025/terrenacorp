<?php

namespace App\Livewire;

use App\Models\SubTipoInmueble;
use App\Models\TipoInmueble;
use Livewire\Component;

class Filter extends Component
{
    public $tipoSeleccionado = null;
    public $subtipoSeleccionado = null;

    public function render()
    {
        return view('livewire.filter', [
            'tipos' => TipoInmueble::select('id', 'nombre')->get(),
            'subtipos' => $this->tipoSeleccionado 
                ? SubTipoInmueble::where('tipo_inmueble_id', $this->tipoSeleccionado)
                    ->select('id', 'nombre')
                    ->get()
                : collect(), // Evita errores cuando $tipoSeleccionado es null
        ]);
    }
}
