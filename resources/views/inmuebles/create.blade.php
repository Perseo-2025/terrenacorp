<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white py-12 px-4 sm:px-6 lg:px-8 mt-6 rounded-lg shadow-md">
        
        <!-- Encabezado con botón Volver -->
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800">Registrar Inmueble</h2>

            <x-nav-link :href="route('inmuebles.index')"
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

        <!-- Barra de Progreso Dinámica -->
        <div class="w-full bg-gray-200 rounded-full h-2.5 my-6">
            <div id="progress-bar" class="bg-blue-500 h-2.5 rounded-full transition-all duration-300" style="width: 0%;">
            </div>
        </div>

        @livewire('crear-inmueble', [], key('crear-inmueble'))

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('updateProgressBar', step => {
                document.getElementById('progress-bar').style.width = (step / 6) * 100 + '%';
            });
        });
    </script>
    
</x-app-layout>
