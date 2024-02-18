@extends('layouts.main')
@section('title', 'Level Up - Vendas')
@section('content')
    <section class="title-section-main">
        <h2 class="page-title">Vendas</h2>
        <a href="{{ route('sale.create') }}"><button class="btn btn-primary"><ion-icon name="add-outline"></ion-icon>Novo venda</button></a>
    </section>
    <section class="filter-section">
        <form action="{{ route('sale.index') }}" method="GET">
            @csrf
            <select name="seller_id">
            @foreach($sellers as $seller)
                <option value="{{ $seller->id }}">{{ $seller->name }}</option>
            @endforeach
            </select>
            <input type="date" name="startDate" value="{{ date('Y-m-d') }}" placeholder="Data inicial">
            <input type="date" name="endDate" value="{{ date('Y-m-d') }}" placeholder="Data final">
            <input type="submit" class="btn btn-primary" value="Pesquisar">
        </form>
    </section>
    <section class="data-section">
        <table class="data-table">
            <thead>
                <tr>
                    <th class="col-th">Id</th>
                    <th class="col-name">Vendedor</th>
                    <th class="col-th">Valor</th>
                    <th class="col-th">Comissão</th>
                    <th class="col-th">Data</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td class="text-center">{{ $sale->id }}</td>
                    <td class="text-center">{{ $sale->seller->name }}</td>
                    <td class="text-center">{{ $sale->value }}</td>
                    <td class="text-center">{{ $sale->commission }}</td>
                    <td class="text-center">{{ $sale->date }}</td>
                    <td class="col-icon"><a href="{{ route('sale.show', $sale->id) }}"><button class="btn btn-blue"><ion-icon name="search-outline"></ion-icon></button></a></td>
                    <td class="col-icon"><a href="{{ route('sale.edit', $sale->id) }}"><button class="btn btn-yellow"><ion-icon name="color-wand-outline"></ion-icon></button></a></td>
                    <td class="col-icon">
                        <form action="{{ route('sale.destroy', $sale->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-red" type="submit"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection