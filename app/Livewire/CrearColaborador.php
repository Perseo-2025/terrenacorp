<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Colaborador;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CrearColaborador extends Component
{
    public $name, $last_name, $dni, $phone, $landline_phone, $address, $email, $password, $role, $jefe_id;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dni' => 'required|string|unique:colaboradores,dni|max:20',
            'phone' => 'nullable|string|max:20',
            'landline_phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'email' => 'required|email|unique:colaboradores,email',
            'password' => 'required|string|min:6',
            'role' => ['required', Rule::in(['jefe', 'empleado'])],
            'jefe_id' => 'nullable|exists:colaboradores,id',
        ];
    }

    public function crearColaborador()
    {
        $this->validate();

        $colaborador = Colaborador::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'dni' => $this->dni,
            'phone' => $this->phone,
            'landline_phone' => $this->landline_phone,
            'address' => $this->address,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'super_jefe_id' => Auth::id(),
            'jefe_id' => $this->role === 'empleado' ? $this->jefe_id : null,
        ]);

        // Asignar el rol con Laravel Permission
        $colaborador->assignRole($this->role);

        session()->flash('message', 'Colaborador creado exitosamente.');
        $this->reset();
        $this->dispatch('colaboradorCreado');
    }

    public function render()
    {
        return view('livewire.crear-colaborador');
    }
}
