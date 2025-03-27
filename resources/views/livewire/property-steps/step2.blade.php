<div>
    {{-- PASO 6 --}}
    <h1 class="block text-gray-700 font-bold m-4">Áreas:</h1>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
            <label class="block text-gray-700 font-bold">Área de Terreno</label>
            <input type="text" wire:model="area" class="w-full p-2 border rounded-lg" placeholder="2">
            @error('tipo_operacion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Fondo</label>
            <input type="text" wire:model="fondo" class="w-full p-2 border rounded-lg" placeholder="5">
            @error('tipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Frente</label>
            <input type="text" wire:model="frente" class="w-full p-2 border rounded-lg" placeholder="2">
            @error('subtipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
            <label class="block text-gray-700 font-bold">Derecho</label>
            <input type="text" wire:model="derecho" class="w-full p-2 border rounded-lg" placeholder="6">
            @error('tipo_operacion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Izquierdo</label>
            <input type="text" wire:model="izquierdo" class="w-full p-2 border rounded-lg" placeholder="2">
            @error('tipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">Construida</label>
            <input type="text" wire:model="construida" class="w-full p-2 border rounded-lg" placeholder="2">
            @error('subtipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
            <label class="block text-gray-700 font-bold">N° de Pisos</label>
            <input type="text" wire:model="piso" class="w-full p-2 border rounded-lg" placeholder="2">
            @error('tipo_operacion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">N° de Baños</label>
            <input type="text" wire:model="wc" class="w-full p-2 border rounded-lg" placeholder="5">
            @error('tipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">N° de Dormitorios</label>
            <input type="text" wire:model="dormitorio" class="w-full p-2 border rounded-lg" placeholder="4">
            @error('subtipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mb-4">
        <div>
            <label class="block text-gray-700 font-bold">N° de Cocheras</label>
            <input type="text" wire:model="cochera" class="w-full p-2 border rounded-lg" placeholder="1">
            @error('tipo_operacion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-bold">N° de Ambientes</label>
            <input type="text" wire:model="ambiente" class="w-full p-2 border rounded-lg" placeholder="2">
            @error('tipo_inmueble')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <h1 class="block text-gray-700 font-bold m-4">Distribución:</h1>

    {{-- ÚLTIMO PASO --}}
    {{-- CHECKBOX --}}
    <div class="grid grid-cols-4 gap-4">
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Sala Principal</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Sala de Estar</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Comedor Principal</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Comedor Diario</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Cocina</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Estudio</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Terraza</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Jardín</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Barbacoa</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Piscina</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Sótano</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Azotea</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Almacén</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Lavandería</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Cuarto de Servicio</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Otros Ambientes</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Depósito</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Baño de Servicio</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Área Social</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Gimnasio</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Gerencia</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Directorio</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Sala de Conferencias</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Recepción</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Sala de Espera</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Sala de Ventas</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Patio de Maniobras</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Ingreso de Camiones</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="toggle-checkbox">
            <span>Ingreso de Montacargas</span>
        </label>
    </div>
    <br>

    <div class="mb-4">
        <h1 class="block text-gray-700 font-bold m-4">Características:</h1>

        <div class="grid grid-cols-2 gap-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Amoblado</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Aire Acondicionado</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Remodelado</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Seguridad 24H</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Instalaciones Para Computo</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Ascensor</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Escalera de emergencia</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Central Telefónica</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Video Vigilancia</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Carga Eléctrica</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Pozo a Tierra</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Cerco Perimétrico</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Material Techo</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Energía Eléctrica</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Agua Potable</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" class="toggle-checkbox">
                <span>Pozo Agua</span>
            </label>
        </div>
    </div>

</div>