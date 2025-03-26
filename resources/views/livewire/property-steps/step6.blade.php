<div>
    {{-- PASO 2 --}}
    <h1>Ubicación</h1>
    <!-- Sección en 3 columnas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
            <label class="block text-gray-700 font-bold">Departamento</label>
            <select wire:model="tipo_operacion" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                <option value="venta">Lima</option>
                <option value="alquiler">Callao</option>
            </select>
            @error('tipo_operacion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Provincia</label>
            <select wire:model="tipo_inmueble" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                <option value="casa">Lima Metropolitana</option>
                <option value="departamento">Callao</option>
            </select>
            @error('tipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Distrito</label>
            <select wire:model="subtipo_inmueble" class="w-full p-2 border rounded-lg">
                <option value="">Seleccione...</option>
                <option value="urbanizacion">Chorrillos</option>
                <option value="condominio">Villa Salvador</option>
                <option value="rustico">Ate</option>
                <option value="campo">Jesus María</option>
                <option value="playa">Villa María de Triunfo</option>
            </select>
            @error('subtipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Enlace Google</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg"
            placeholder="https://www.google.com.pe/maps/place/Museo+Larco/@-12.0725637,-77.0735855,17z/data=!3m1!4b1!4m6!3m5!1s0x9105c91a5000653d:0x1654d5501a2ea1e9!8m2!3d-12.072569!4d-77.0710106!16s%2Fm%2F02vysbg?hl=es-419&entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Calle</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg" placeholder="AV. Simón Bolivar">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Referencia</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg"
            placeholder="Cruce con la calle Paracas y Navarra">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <h2>Zonificación</h2>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Usos Permitidos</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg" placeholder="">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Altura "metros"</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg" placeholder="148 mts">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
