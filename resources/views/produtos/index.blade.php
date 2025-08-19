<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Produtos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Produtos Teste</h1>

    <!-- Formulário para adicionar produto -->
    <form method="POST" action="/produtos">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Produto" required>
        <input type="number" step="0.01" name="preco" placeholder="Preço" required>
        <button type="submit">Adicionar</button>
    </form>

    <hr>

    <!-- Lista de produtos -->
    <ul>
        @foreach($produtos as $produto)
            <li>
                <form method="POST" action="/produtos/{{ $produto->id }}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="nome" value="{{ $produto->nome }}" required>
                    <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}" required>
                    <button type="submit">Salvar</button>
                </form>

                <form method="POST" action="/produtos/{{ $produto->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
