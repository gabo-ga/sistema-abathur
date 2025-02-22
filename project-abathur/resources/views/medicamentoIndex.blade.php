@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-4 mx-4">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-8">Lista de Medicamentos</h2>
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
                <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $medicamento->nombre }}</td>
                <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $medicamento->presentacion }}</td>
                <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $medicamento->descripcion }}</td>
                <td class="py-2 px-4 border-b border-gray-200 flex place-content-around px-10">
                    <a href="#" onclick="openModalEdit('{{ route('medicamento.update', $medicamento->id) }}', '{{ $medicamento->nombre }}', '{{ $medicamento->presentacion }}', '{{ $medicamento->descripcion }}')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed" class="mr-2">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                        Editar
                    </a>
                    <form action="{{ route('medicamento.destroy', $medicamento->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 flex items-center" onclick="return confirm('¿Estás seguro de que deseas eliminar este medicamento?')">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed" class="mr-2"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                Eliminar
                            </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('modals.editModalMedicamento')

<script>
    function openModalEdit(action, nombre, presentacion, descripcion) {
        $('#editForm').attr('action', action);
        $('#nombre').val(nombre);
        $('#presentacion').val(presentacion);
        $('#descripcion').val(descripcion);
        $('#editModal').show();
    }

    function closeModalEdit() {
        $('#editModal').hide();
    }
</script>

@endsection

