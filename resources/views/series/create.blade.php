<x-layout title="Adicionar Séries">
    <form action="/series/salvar" method="POST">
       @csrf
        <div class="mb-3">
            <label class="form-label" for="nome">Digite o nome:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <button type='submit' class="btn btn-primary">Enviar</button>
    </form>
</x-layout>
