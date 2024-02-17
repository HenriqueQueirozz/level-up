@extends('layouts.main')
@section('title', 'Level Up - Vendas')
@section('content')
    <section class="title-section-main">
        <h2 class="page-title">Vendas</h2>
        <a href="{{ route('sale.create') }}"><button class="btn btn-primary"><ion-icon name="add-outline"></ion-icon>Novo venda</button><a/>
    </section>
    <section class="data-section">
        <table class="data-table">
            <thead>
                <tr>
                    <th class="col-id">Id</th>
                    <th>Vendedor</th>
                    <th>Valor</th>
                    <th>Comissão</th>
                    <th>Data</th>
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
                    <td class="col-icon"><a href="{{ route('sale.show', $sale->id) }}"><button class="btn btn-yellow"><ion-icon name="color-wand-outline"></ion-icon></button></a></td>
                    <td class="col-icon"><button class="btn btn-red"><ion-icon name="trash-outline"></ion-icon></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection