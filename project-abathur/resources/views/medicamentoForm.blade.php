@extends('layouts.app')

@section('content')
<div>
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-center items-center w-3/4 mx-auto mt-8">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Registrar Medicamento</h2>

        <form action="{{route('medicamento.store')}}" method="POST" class="space-y-4">
            @csrf
            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Presentación -->
            <div>
                <label for="presentacion" class="block text-sm font-medium text-gray-700">Presentación</label>
                <input type="text" name="presentacion" id="presentacion" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Descripción -->
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <!-- Botón de Envío -->
            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Registrar
            </button>
        </form>
    </div>
</div>
@endsection



</html>
