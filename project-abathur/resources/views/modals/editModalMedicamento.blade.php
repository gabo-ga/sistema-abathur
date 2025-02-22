<div id="editModal" class="modal hidden fixed z-10 inset-0 overflow-y-auto">
    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
    <div class="modal-content bg-white p-4 rounded-lg shadow-lg mx-auto mt-20 max-w-lg relative z-20">
        <div class="flex justify-end">
            <span class="close rounded bg-red-700" onclick="closeModalEdit()">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </span>
        </div>

        <h2 class="text-2xl text-blue-600 mb-4">Editar Medicamento</h2>
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 mb-2">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="presentacion" class="block text-gray-700 mb-2">Presentación</label>
                <input type="text" id="presentacion" name="presentacion" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 mb-2">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="w-full px-3 py-2 border rounded-lg" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Guardar</button>
        </form>
    </div>
</div>

<style>
    .modal {
        display: none;
    }
    .modal.show {
        display: block;
    }
</style>

<script>
    function closeModalEdit() {
        document.getElementById('editModal').classList.remove('show');
    }
</script>
