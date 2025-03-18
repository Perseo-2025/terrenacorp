<div class="w-full max-w-4xl mx-auto p-4">
    <div class="flex flex-wrap items-center gap-4 bg-gray-800 p-4 rounded-lg shadow-lg">

        <!-- Input de búsqueda -->
        <div class="relative w-full md:w-auto flex-1">
            <input type="text" placeholder="🔎 Buscar..." 
                class="w-full pl-10 pr-4 py-2 rounded-lg bg-gray-900 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Select de Tipo de Inmueble -->
        <div class="relative w-full md:w-auto flex-1">
            <select wire:model="tipoSeleccionado" wire:key="tipo-inmueble-select"
                class="w-full px-4 py-2 bg-gray-900 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">📂 Tipo</option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select de Subtipo de Inmueble -->
        <div class="relative w-full md:w-auto flex-1">
            <select wire:model="subtipoSeleccionado" wire:key="subtipo-inmueble-select"
                class="w-full px-4 py-2 bg-gray-900 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                @if($subtipos->isEmpty()) disabled @endif>
                <option value="">📁 Subtipo</option>
                @foreach ($subtipos as $subtipo)
                    <option value="{{ $subtipo->id }}">{{ $subtipo->nombre }}</option>
                @endforeach
            </select>
        </div>

    </div>
</div>
