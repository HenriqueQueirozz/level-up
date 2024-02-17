@extends('layouts.main')
@section('title', 'Level Up - Produtos')
@section('content')
    <section class="title-section">
        <h2 class="page-title">Produtos</h2>
        <button class="btn btn-primary" onclick="createSeller()"><ion-icon name="add-outline"></ion-icon>Novo produto</button>
    </section>
    <section class="data-section">
        <table class="data-table">
            <thead>
                <tr>
                    <th class="col-id">Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td class="text-center">{{ $product->name }}</td>
                    <td class="text-center">{{ $product->description }}</td>
                    <td class="text-center">{{ $product->image }}</td>
                    <td class="text-center">{{ $product->price }}</td>
                    <td class="text-center">{{ $product->quantity }}</td>
                    <td class="col-icon"><button class="btn btn-blue" onclick="showSeller()"><ion-icon name="search-outline"></ion-icon></button></td>
                    <td class="col-icon"><button class="btn btn-yellow" onclick="editSeller()"><ion-icon name="color-wand-outline"></ion-icon></button></td>
                    <td class="col-icon"><button class="btn btn-red" onclick="deleteSeller()"><ion-icon name="trash-outline"></ion-icon></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection