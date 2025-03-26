<div class="max-w-7xl mx-auto p-6 bg-white shadow-lg rounded-lg">

    <!-- Buscador -->
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-bold text-gray-700">Gestión de Inmuebles</h2>
        <x-nav-link :href="route('inmuebles.create')"
            class="bg-blue-600 text-white hover:text-black font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300 ease-in-out flex items-center space-x-2">
            <!-- Ícono Opcional -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 2a1 1 0 011 1v6h6a1 1 0 110 2h-6v6a1 1 0 11-2 0v-6H3a1 1 0 110-2h6V3a1 1 0 011-1z" />
            </svg>
            <span>Agregar Inmueble</span>
        </x-nav-link>

        <div class="relative w-full max-w-md">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" viewBox="0 0 16 16" fill="currentColor">
                    <path d="M1.5 1.5A.5.5 0 0 1 2 .5h12a.5.5 0 0 1 .5.5v2.028a1 1 0 0 1-.276.685L9 9.43V14.5a.5.5 0 0 1-.79.407l-2-1.5A.5.5 0 0 1 6 13V9.43L1.776 4.213A1 1 0 0 1 1.5 3.528V1.5z"/>
                </svg>
            </span>
            <input type="text" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar...">
        </div>
    </div>

    <!-- Tabla de propietarios -->
    <div class="overflow-x-auto">
        <table class="w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">Dni</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Apellido</th>
                    <th class="px-4 py-2">Usuario</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Celular</th>
                    <th class="px-4 py-2">Teléfono</th>
                    <th class="px-4 py-2">Rol</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                    <td class="px-4 py-2">71690223</td>
                    <td class="px-4 py-2">Rey</td>
                    <td class="px-4 py-2">Cardenas</td>
                    <td class="px-4 py-2">Prueba</td>
                    <td class="px-4 py-2">prueba@gmail.com</td>
                    <td class="px-4 py-2">982827172</td>
                    <td class="px-4 py-2">12912932</td>
                    <td class="px-4 py-2">Empelado</td>
                    <td class="px-4 py-2 flex space-x-2">
                        <!-- Botón Editar -->
                        <a href="#" class="text-blue-500 hover:text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M17.414 2.586a2 2 0 00-2.828 0L9 8.172V11h2.828l5.586-5.586a2 2 0 000-2.828zM4 13v3h3l8.293-8.293-3-3L4 13z" />
                            </svg>
                        </a>

                        <!-- Botón Eliminar -->
                        <button class="text-red-500 hover:text-red-700"
                            {{-- wire:click="deleteOwner({{ $owner->id }})" --}}>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 00-2 2v1H3a1 1 0 000 2h1v9a2 2 0 002 2h8a2 2 0 002-2V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6zm0 3h8V4H6v1zm1 3a1 1 0 112 0v6a1 1 0 11-2 0V8zm4 0a1 1 0 112 0v6a1 1 0 11-2 0V8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr class="border-t">
                    <td class="px-4 py-2">79293292</td>
                    <td class="px-4 py-2">Perseo</td>
                    <td class="px-4 py-2">Cardenas</td>
                    <td class="px-4 py-2">Test</td>
                    <td class="px-4 py-2">test@gmail.com</td>
                    <td class="px-4 py-2">982827172</td>
                    <td class="px-4 py-2">12912932</td>
                    <td class="px-4 py-2">JEFE</td>
                    <td class="px-4 py-2 flex space-x-2">
                        <!-- Botón Editar -->
                        <a href="#" class="text-blue-500 hover:text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M17.414 2.586a2 2 0 00-2.828 0L9 8.172V11h2.828l5.586-5.586a2 2 0 000-2.828zM4 13v3h3l8.293-8.293-3-3L4 13z" />
                            </svg>
                        </a>

                        <!-- Botón Eliminar -->
                        <button class="text-red-500 hover:text-red-700"
                            {{-- wire:click="deleteOwner({{ $owner->id }})" --}}>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 00-2 2v1H3a1 1 0 000 2h1v9a2 2 0 002 2h8a2 2 0 002-2V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6zm0 3h8V4H6v1zm1 3a1 1 0 112 0v6a1 1 0 11-2 0V8zm4 0a1 1 0 112 0v6a1 1 0 11-2 0V8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>   
            {{-- <tbody>
                @forelse ($owners as $owner)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $owner->name }}</td>
                        <td class="px-4 py-2">{{ $owner->contact }}</td>
                        <td class="px-4 py-2">{{ $owner->tipo_documento }}</td>
                        <td class="px-4 py-2">{{ $owner->numero_documento }}</td>
                        <td class="px-4 py-2">{{ $owner->telefono_fijo }}</td>
                        <td class="px-4 py-2">{{ $owner->celular }}</td>
                        <td class="px-4 py-2">{{ $owner->email }}</td>
                        <td class="px-4 py-2">{{ $owner->others ?? 'N/A' }}</td>
                        <td class="px-4 py-2 flex space-x-2">
                            <!-- Botón Editar -->
                            <a href="{{route('propietarios.edit', $owner->id)}}" class="text-blue-500 hover:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L9 8.172V11h2.828l5.586-5.586a2 2 0 000-2.828zM4 13v3h3l8.293-8.293-3-3L4 13z" />
                                </svg>
                            </a>

                            <!-- Botón Eliminar -->
                            <button class="text-red-500 hover:text-red-700"
                                wire:click="deleteOwner({{ $owner->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v1H3a1 1 0 000 2h1v9a2 2 0 002 2h8a2 2 0 002-2V7h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6zm0 3h8V4H6v1zm1 3a1 1 0 112 0v6a1 1 0 11-2 0V8zm4 0a1 1 0 112 0v6a1 1 0 11-2 0V8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center py-4">No hay propietarios registrados.</td>
                    </tr>
                @endforelse
            </tbody> --}}
        </table>
    </div>

    <!-- Paginación -->
    {{-- <div class="mt-4">
        {{ $owners->links() }}
    </div> --}}
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('livewire:initialized', function () {
        Livewire.on('confirmDeleteOwner', (ownerId) => {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deleteOwner', ownerId);
                }
            });
        });

        Livewire.on('propietarioEliminado', () => {
            Swal.fire({
                title: 'Eliminado',
                text: 'El propietario ha sido eliminado correctamente.',
                icon: 'success',
                timer: 5000,
                showConfirmButton: true
            });
        });
    });
</script>