<x-Layout title="Novo game">
    <div class="container w-50">
        <form action="/games/salvar" method="POST" class="form-group d-flex flex-column">
        @csrf
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
            <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
        </form>
    </div>
</x-Layout>
