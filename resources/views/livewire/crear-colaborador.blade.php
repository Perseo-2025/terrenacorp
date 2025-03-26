<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md"c
    <form wire:submit.prevent="crearColaborador">
        <!-- DNI -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">DNI</label>
            <input type="text" wire:model="dni" class="w-full p-2 border rounded-lg">
            @error('dni') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Nombre -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Nombre</label>
            <input type="text" wire:model="name" class="w-full p-2 border rounded-lg">
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Apellido -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Apellido</label>
            <input type="text" wire:model="last_name" class="w-full p-2 border rounded-lg">
            @error('last_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Dirección -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Dirección</label>
            <input type="text" wire:model="address" class="w-full p-2 border rounded-lg">
            @error('address') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Teléfono Celular -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Celular</label>
            <input type="text" wire:model="phone" class="w-full p-2 border rounded-lg">
            @error('phone') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Teléfono Fijo -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Teléfono Fijo</label>
            <input type="text" wire:model="landline_phone" class="w-full p-2 border rounded-lg">
            @error('landline_phone') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Rol de Usuario -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Rol de Usuario</label>
            <select wire:model="role" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                <option value="jefe">JEFE</option>
                <option value="empleado">EMPLEADO</option>
            </select>
            @error('role') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Correo Electrónico -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Correo Electrónico</label>
            <input type="email" wire:model="email" class="w-full p-2 border rounded-lg">
            @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Contraseña -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Contraseña</label>
            <input type="password" wire:model="password" class="w-full p-2 border rounded-lg">
            @error('password') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Botón de Envío -->
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 w-full hover:bg-blue-700">
                Agregar Colaborador
            </button>
        </div>
    </form>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:initialized', function () {
        Livewire.on('colaboradorCreado', () => {
            Swal.fire({
                title: '¡Colaborador Creado!',
                text: 'El colaborador se ha registrado correctamente.',
                icon: 'success',
                timer: 3000,
                showConfirmButton: true
            });
        });
    });
</script>
