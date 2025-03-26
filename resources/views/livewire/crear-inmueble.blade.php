<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <form wire:submit.prevent="saveInmueble">

        <!-- Pasos del formulario -->
        @if ($step == 1)
            @livewire('property-steps.step1', compact('name', 'contact', 'tipo_documento'))
        @elseif ($step == 2)
            @livewire('property-steps.step2', compact('tipo_operacion', 'tipo_inmueble', 'subtipo_inmueble'))
        @elseif ($step == 3)
            @livewire('property-steps.step3', compact('department', 'district', 'address', 'specific_address'))
        @elseif ($step == 4)
            @livewire('property-steps.step4', compact('images'))
        @elseif ($step == 5)
            @livewire('property-steps.step5', compact('features'))
        @elseif ($step == 6)
            @livewire('property-steps.step6')
        @endif

        <!-- Navegación de pasos -->
        <div class="flex justify-between mt-4">
            @if ($step > 1)
                <button type="button" wire:click="previousStep" class="bg-gray-400 px-4 py-2 rounded-lg">
                    Anterior
                </button>
            @endif

            @if ($step < 6)
                <button type="button" wire:click="nextStep" class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                    Siguiente
                </button>
            @else
                <!-- Botón de Envío -->
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 w-full hover:bg-blue-700">
                        Guardar Inmueble
                    </button>
                </div>
            @endif
        </div>
    </form>
</div>

<!-- SweetAlert2 para Notificaciones -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:initialized', function() {
        Livewire.on('inmuebleCreado', () => {
            Swal.fire({
                title: '¡Inmueble Creado!',
                text: 'El inmueble se ha registrado correctamente.',
                icon: 'success',
                timer: 3000,
                showConfirmButton: true
            });
        });
    });
</script>
