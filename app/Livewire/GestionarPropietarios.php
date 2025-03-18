<?php

namespace App\Livewire;

use App\Models\Owner;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class GestionarPropietarios extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search']; // Para mantener la búsqueda en la URL

    public function updatingSearch()
    {
        $this->resetPage(); // Reinicia la paginación al buscar
    }


    public function confirmDelete($id)
    {
        // Emitir evento para SweetAlert2 y confirmar la eliminación
        $this->dispatch('confirmDeleteOwner', $id);
    }

    public function deleteOwner($id)
    {
        $owner = Owner::find($id);

        if ($owner) {
            $owner->delete();

            // Emitir evento para mostrar el mensaje de eliminación exitosa
            $this->dispatch('propietarioEliminado');
        }

        return redirect()->route('propietarios.index');
    }


    public function render()
    {
        $owners = Owner::where('users_id', Auth::id())->where('name', 'like', '%' . $this->search . '%')->paginate(8);

        return view('livewire.gestionar-propietarios', compact('owners'));
    }
}
