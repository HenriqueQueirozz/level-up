<h1>Listagem de produtos</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td><a href="{{ route('product.show', $product->id) }}">detalhes</a></td>
            <td><a href="{{ route('product.edit', $product->id) }}">editar</a></td>
            <td>
                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="excluir">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('product.create') }}">Novo produto</a>