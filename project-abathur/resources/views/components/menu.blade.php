<div>
    <!-- Botón para mostrar/ocultar el menú -->
    <button id="menu-toggle" class="fixed top-4 left-4 bg-blue-600 text-white py-2 px-4 rounded z-50">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
    </button>

    <!-- Menú -->
    <div id="menu" class="fixed top-0 left-0 h-full w-64 bg-sky-800 text-white py-4 px-6 transform -translate-x-full transition-transform duration-300 mt-16">
        <nav>
            <ul class="space-y-8 text-base">
                <li>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                        <a href="/" class="hover:underline block ">Inicio</a>
                    </div>

                </li>
                <li><a href="{{route('medicamento.form')}}" class="hover:underline block">Registrar medicamento</a></li>
                <li><a href="{{route('medicamento.all')}}" class="hover:underline block">Lista de medicamentos</a></li>
                <li><a href="/about" class="hover:underline block">Acerca de</a></li>
                <li><a href="/contact" class="hover:underline block">Contacto</a></li>
            </ul>
        </nav>
    </div>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        const mainContent = document.getElementById('main-content');
        menu.classList.toggle('-translate-x-full');
        mainContent.classList.toggle('ml-64');
    });
</script>
