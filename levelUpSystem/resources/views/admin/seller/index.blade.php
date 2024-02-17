@extends('layouts.main')
@section('title', 'Level Up - Vendedores')
@section('content')
    <section class="title-section">
        <h2 class="page-title">Vendedores</h2>
        <button class="btn btn-primary" onclick="createSeller()"><ion-icon name="add-outline"></ion-icon>Novo vendedor</button>
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
                    <td class="col-icon"><button class="btn btn-blue" onclick="showSeller()"><ion-icon name="search-outline"></ion-icon></button></td>
                    <td class="col-icon"><button class="btn btn-yellow" onclick="editSeller()"><ion-icon name="color-wand-outline"></ion-icon></button></td>
                    <td class="col-icon"><button class="btn btn-red" onclick="deleteSeller()"><ion-icon name="trash-outline"></ion-icon></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

    <dialog class="modal-dialog">
        <section class="dialog-header">
            <h2>Adicionar vendedor</h2>
            <button class="btn" onclick="closeDialog()"><ion-icon name="close-outline"></ion-icon></button>
        </section>
        <!-- <h2>Atualizar vendedor</h2> -->
        <!-- <h2>Atualizar vendedor</h2> -->
        <form action="{{ route('seller.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Nome" name="name">
            <input type="email" placeholder="E-mail" name="email">
            <button type="submit">Confirmar</button>
        </form>
    </dialog>
@endsection