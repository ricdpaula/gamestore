<x-Layout title="Lista de games">
    <div class="container text-center">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td>{{$game->id}}</td>
                        <td>{{$game->nome}}</td>
                        <td>
                            <a href="/games/deletar?id={{$game->id}}" class="btn btn-danger">Excluir</a>
                            <a href="/games/editar?id={{$game->id}}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/games/criar" class="btn btn-primary">Adicionar um novo game</a>
    </div>
</x-Layout>
