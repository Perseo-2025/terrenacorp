<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    
    <form wire:submit.prevent="updateOwner">
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
        </div>

        <!-- Celular -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Celular</label>
            <input type="text" wire:model="celular" class="w-full p-2 border rounded-lg">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Correo Electrónico</label>
            <input type="email" wire:model="email" class="w-full p-2 border rounded-lg">
        </div>

        <!-- Otros -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Otros</label>
            <textarea wire:model="others" class="w-full p-2 border rounded-lg"></textarea>
        </div>

        <!-- Botón de Envío -->
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 w-full hover:bg-blue-700 transition">
                Actualizar
            </button>
        </div>
    </form>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('livewire:initialized', function () {
        Livewire.on('propietarioActualizado', (redirectUrl) => {
            Swal.fire({
                title: '¡Propietario Actualizado!',
                text: 'El propietario se ha editado correctamente.',
                icon: 'success',
                timer: 3000,
                showConfirmButton: true
            });

            // Redireccionar después de 3 segundos
            setTimeout(() => {
                window.location.href = redirectUrl;
            }, 3000);
        });
    });
</script>
