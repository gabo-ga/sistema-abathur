@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Lista de Medicamentos</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">Nombre</th>
                <th class="py-2 px-4 border-b border-gray-200">Presentación</th>
                <th class="py-2 px-4 border-b border-gray-200">Descripción</th>
                <th class="py-2 px-4 border-b border-gray-200">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicamentos as $medicamento)
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">{{ $medicamento->nombre }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $medicamento->presentacion }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $medicamento->descripcion }}</td>
                <td class="py-2 px-4 border-b border-gray-200">
                    <a href="{{ route('medicamento.update', $medicamento->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
                    <form action="{{ route('medicamento.destroy', $medicamento->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="return confirm('¿Estás seguro de que deseas eliminar este medicamento?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

