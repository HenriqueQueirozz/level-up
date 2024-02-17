@extends('layouts.main')
@section('title', 'Level Up - Vendas')
@section('content')
    <section class="title-section">
        <h2 class="page-title">Vendas</h2>
        <button class="btn btn-primary" onclick="createSeller()"><ion-icon name="add-outline"></ion-icon>Novo venda</button>
    </section>
    <section class="data-section">
        <table class="data-table">
            <thead>
                <tr>
                    <th class="col-id">Id</th>
                    <th>Vendedor Id</th>
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
                    <td class="text-center">{{ $sale->seller_id }}</td>
                    <td class="text-center">{{ $sale->value }}</td>
                    <td class="text-center">{{ $sale->commission }}</td>
                    <td class="text-center">{{ $sale->date }}</td>
                    <td class="col-icon"><button class="btn btn-blue" onclick="showSeller()"><ion-icon name="search-outline"></ion-icon></button></td>
                    <td class="col-icon"><button class="btn btn-yellow" onclick="editSeller()"><ion-icon name="color-wand-outline"></ion-icon></button></td>
                    <td class="col-icon"><button class="btn btn-red" onclick="deleteSeller()"><ion-icon name="trash-outline"></ion-icon></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection