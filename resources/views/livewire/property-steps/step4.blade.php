<div>
    {{-- PASO 4 --}}
    <h2>Agregar Imagenes</h2>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Cargar Imagen</label>

        <div
            class="border-2 border-dashed border-gray-400 rounded-lg p-6 flex flex-col items-center justify-center text-gray-500 cursor-pointer hover:border-blue-500 transition">
            <svg class="w-12 h-12 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 16V8a2 2 0 012-2h2a2 2 0 012 2v8m8-4l2 2 4-4M13 16l4-4m0 0l-2-2m2 2H3m10 0a2 2 0 002-2V6a2 2 0 00-2-2H9a2 2 0 00-2 2v2a2 2 0 002 2h4z" />
            </svg>
            <p class="text-sm">Arrastra una imagen aquí o haz clic para subir</p>
            <input type="file" wire:model="name" accept="image/*" class="hidden">
        </div>

        @error('name')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
</div>
