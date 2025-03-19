<nav class="bg-gray-900 text-white px-6 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-white">TerrenaCorp</a>

        <!-- Menú de navegación (Escritorio) -->
        <div class="hidden md:flex items-center space-x-6">
            <x-nav-link :href="route('dashboard')" class="text-white hover:text-gray-100 transition">Dashboard</x-na>
            <x-nav-link :href="route('colaboradores.index')" class="text-white hover:text-gray-100 transition">Colaboradores</x-na>
            <x-nav-link :href="route('propietarios.index')" class="text-white hover:text-gray-100 transition">Propietarios</x-nav-link>
            <a href="#" class="text-white hover:text-gray-300 transition">Inmuebles</a>
        </div>

        <!-- Usuario y perfil -->
        <div class="flex items-center space-x-4">
            @auth
                <span class="hidden md:block text-sm text-gray-300 uppercase">ROL: SUPER JEFE | Bienvenido: <strong> {{ Auth::user()->name }} </strong></span>

                <!-- Menú desplegable del perfil -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center focus:outline-none">
                        <img src="{{auth()->user()->profile_photo_url}}" class="rounded-full w-10 h-10 border border-gray-500" alt="Profile">
                    </button>

                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg py-2">
                        <a href="{{route('profile.show')}}" class="block px-4 py-2 hover:bg-gray-200">Tu Perfil</a>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-200">Cerrar Sesión</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 border border-white rounded-lg text-white hover:bg-white hover:text-gray-900 transition">
                        Iniciar Sesión
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 border border-white rounded-lg text-white hover:bg-white hover:text-gray-900 transition">
                        Registrarse
                    </a>
                </div>
            @endauth
        </div>

        <!-- Botón del menú móvil -->
        <div class="md:hidden flex items-center">
            <button @click="mobileOpen = !mobileOpen" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Menú móvil -->
    <div x-data="{ mobileOpen: false }" x-show="mobileOpen" class="md:hidden mt-4 bg-gray-800 p-4 rounded-lg">
        <x-nav-link :href="route('dashboard')" class="text-white hover:text-gray-100 transition">Dashboard</x-na>
        <x-nav-link :href="route('colaboradores.index')" class="text-white hover:text-gray-100 transition">Colaboradores</x-na>
        <x-nav-link :href="route('propietarios.index')" class="text-white hover:text-gray-100 transition">Propietarios</x-nav-link>
        <a href="#" class="text-white hover:text-gray-300 transition">Inmuebles</a>
        
        @auth
            <div class="mt-4 border-t border-gray-600 pt-4">
                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">Tu Perfil</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">Configuración</a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-700 rounded">Cerrar Sesión</button>
                </form>
            </div>
        @else
            <div class="mt-4 border-t border-gray-600 pt-4">
                <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">Registrarse</a>
            </div>
        @endauth
    </div>
</nav>

<!-- Incluye Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
