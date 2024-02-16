<h1>Listagem de vendas</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Vendedor Id</th>
            <th>Valor</th>
            <th>Comissão</th>
            <th>Data</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->id }}</td>
            <td>{{ $sale->seller_id }}</td>
            <td>{{ $sale->value }}</td>
            <td>{{ $sale->commission }}</td>
            <td>{{ $sale->date }}</td>
            <td><a href="{{ route('sale.show', $sale->id) }}">detalhes</a></td>
            <td><a href="{{ route('sale.edit', $sale->id) }}">editar</a></td>
            <td>
                <form action="{{ route('sale.destroy', $sale->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="excluir">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('sale.create') }}">Nova venda</a>