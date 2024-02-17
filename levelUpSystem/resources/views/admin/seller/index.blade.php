@extends('layouts.main')
@section('title', 'Level Up - Vendedores')
@section('content')
    <section class="title-section-main">
        <h2 class="page-title">Vendedores</h2>
        <a href="{{ route('seller.create') }}"><button class="btn btn-primary"><ion-icon name="add-outline"></ion-icon>Novo vendedor</button></a>
    </section>
    <section class="data-section">
        <table class="data-table">
            <thead>
                <tr>
                    <th class="col-id">Id</th>
                    <th class="col-name">Nome</th>
                    <th class="col-email">E-mail</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($sellers as $seller)
                <tr>
                    <td class="text-center">{{ $seller->id }}</td>
                    <td class="text-center">{{ $seller->name }}</td>
                    <td class="text-center">{{ $seller->email }}</td>
                    <td class="col-icon"><a href="{{ route('seller.show', $seller->id) }}"><button class="btn btn-blue"><ion-icon name="search-outline"></ion-icon></button></a></td>
                    <td class="col-icon"><a href="{{ route('seller.edit', $seller->id) }}"><button class="btn btn-yellow"><ion-icon name="color-wand-outline"></ion-icon></button></td>
                    <td class="col-icon"><button class="btn btn-red" onclick="deleteSeller()"><ion-icon name="trash-outline"></ion-icon></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection