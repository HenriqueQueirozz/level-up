@extends('layouts.main')
@section('title', 'Level Up - Vendedores')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('seller.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Atualizar vendedor</h2>
    </section>
    <section class="form-section">
        @include('components.alert')

        <form action="{{ route('seller.update', $seller->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" name="name" placeholder="Nome" value="{{ $seller->name }}">
            <input type="email" name="email" placeholder="E-mail" value="{{ $seller->email }}">
            <input type="submit" class="btn btn-primary" value="Atualizar">
        </form>
    </section>
@endsection