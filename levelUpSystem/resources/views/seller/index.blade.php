<h1>Listagem de Vendedores</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($sellers as $seller)
        <tr>
            <td>{{ $seller->id }}</td>
            <td>{{ $seller->name }}</td>
            <td>{{ $seller->email }}</td>
            <td><a href="{{ route('seller.show', $seller->id) }}">detalhes</a></td>
            <td><a href="{{ route('seller.edit', $seller->id) }}">editar</a></td>
            <td>
                <form action="{{ route('seller.destroy', $seller->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="excluir">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('seller.create') }}">Novo vendedor</a>