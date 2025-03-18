<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">

    <form wire:submit.prevent="crearPropietario">
        <!-- Nombre -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Nombre o Razón Social</label>
            <input type="text" wire:model="name" class="w-full p-2 border rounded-lg">
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Contacto -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Contacto</label>
            <input type="text" wire:model="contact" class="w-full p-2 border rounded-lg">
            @error('contact') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Tipo de Documento (ENUM) -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Tipo de Documento</label>
            <select wire:model="tipo_documento" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                <option value="DNI">DNI</option>
                <option value="RUC">RUC</option>
            </select>
            @error('tipo_documento') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Número de Documento -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Número de Documento</label>
            <input type="text" wire:model="numero_documento" class="w-full p-2 border rounded-lg">
            @error('numero_documento') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Teléfono Fijo -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Teléfono Fijo</label>
            <input type="text" wire:model="telefono_fijo" class="w-full p-2 border rounded-lg">
            @error('telefono_fijo') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Celular -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Celular</label>
            <input type="text" wire:model="celular" class="w-full p-2 border rounded-lg">
            @error('celular') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Correo Electrónico</label>
            <input type="email" wire:model="email" class="w-full p-2 border rounded-lg">
            @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Otros Detalles (Opcional) -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Otros Detalles (Opcional)</label>
            <textarea wire:model="others" class="w-full p-2 border rounded-lg" placeholder="Información adicional..."></textarea>
            @error('others') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Botón de Envío -->
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 w-full hover:bg-blue-700">
                Agregar Propietario
            </button>
        </div>
    </form>

</div>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('livewire:initialized', function () {
        Livewire.on('propietarioCreado', () => {
            Swal.fire({
                title: '¡Propietario Creado!',
                text: 'El propietario se ha registrado correctamente.',
                icon: 'success',
                timer: 3000,
                showConfirmButton: true
            });
            
        });
    });
</script>



