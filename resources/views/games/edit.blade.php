<x-Layout title="Editar game">
    <div class="container w-50">
        <form action="/games/editando" method="POST" class="form-group d-flex flex-column">
            @csrf
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{$game['nome']}}" class="form-control">
            <input type="hidden" name="id" value="{{$game['id']}}">
            <button type="submit" class="btn btn-primary mt-2">Editar</button>
        </form>
    </div>
</x-Layout>
