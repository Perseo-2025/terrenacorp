{{-- PASO 1 --}}
<div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Título</label>
        <input type="text" wire:model="titulo" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Propietarios --}}
    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Propietario</label>
        <select wire:model="selectedOwner" class="w-full p-2 border rounded-lg">
            <option value="">Seleccione...</option>
            @foreach($owners as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
        @error('selectedOwner')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>    

    <!-- Sección en 3 columnas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Tipo de Operación</label>
            <select wire:model="selectedOperacion" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione una operación...</option>
                @foreach($operaciones as $id => $tipo)
                    <option value="{{ $id }}">{{ $tipo }}</option>
                @endforeach
            </select>
            @error('selectedOperacion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Tipo de Inmueble</label>
            <select wire:model="selectedTipoInmueble" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                @foreach($tiposInmuebles as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
            @error('tipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            @if (!empty($subTiposInmuebles))
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold">Subtipo de Inmueble</label>
                    <select wire:model="selectedSubTipoInmueble" class="w-full p-2 border rounded-lg">
                        <option value="">Seleccione...</option>
                        @foreach($subTiposInmuebles as $subtipo)
                            <option value="{{ $subtipo->id }}">{{ $subtipo->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            @error('subtipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Descripción</label>
        <textarea name="descripcion" class="w-full p-2 border rounded-lg" cols="30" rows="3"></textarea>
        @error('descripcion')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <br>
</div>
