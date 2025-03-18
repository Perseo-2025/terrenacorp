<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white py-12 px-4 sm:px-6 lg:px-8 mt-6 rounded-lg shadow-md">
        <div class="flex justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">
                    Editar Datos del Propietario : {{$owner->name}}
                </h2>
            </div>
            <div class="justify-end">
                <x-nav-link :href="route('propietarios.index')"
                class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition-all duration-300 ease-in-out 
           flex items-center hover:text-white space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M11.707 3.293a1 1 0 010 1.414L7.414 9H17a1 1 0 110 2H7.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                <span>Volver</span>
            </x-nav-link>
            </div>
        </div>


        @livewire('editar-propietario', ['owner' => $owner])


    </div>
</x-app-layout>
