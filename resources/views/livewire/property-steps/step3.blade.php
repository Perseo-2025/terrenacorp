<div>
    {{-- PASO 3 --}}
    <h2>Documentos</h2>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Código de Contribuyente</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg" placeholder="COD : 210304120">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Ficha o Partida Registral</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg" placeholder="Escríbe el COD : 021032130">
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Suministro de Luz</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg" placeholder="Escríbe el COD : 921032110">
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Suministro de Agua</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg" placeholder="Escríbe el COD : 0321912321">
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Certificado de Parámetros</label>
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold">Cargar Planos</label>
        <input type="file" wire:model="name" class="w-full p-2 border rounded-lg">
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
