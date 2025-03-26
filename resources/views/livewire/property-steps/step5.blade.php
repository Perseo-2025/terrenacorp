<div>
    {{-- Paso 5 --}}
    <h2>Mas información</h2>

    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mb-4">
        <div>
            <label class="block text-gray-700 font-bold">Divisa</label>
            <select wire:model="tipo_operacion" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                <option value="venta">Soles "S/."</option>
                <option value="alquiler">Dólares "$"</option>
            </select>
            @error('tipo_operacion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Estado</label>
            <select wire:model="tipo_inmueble" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                <option value="casa">Vigente</option>
                <option value="departamento">Vendido</option>
                <option value="departamento">Alquilado</option>
            </select>
            @error('tipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Venta</label>
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Alquiler</label>
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Mantenimiento</label>
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Otra Descripcion</label>
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">% de Comision : Venta</label>
        <input type="text" wire:model="comision_venta" class="w-full p-2 border rounded-lg" placeholder="5%">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">% de Comision : Alquiler</label>
        <input type="text" wire:model="comision_alquiler" class="w-full p-2 border rounded-lg" placeholder="2.5%">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
