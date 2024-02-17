@extends('layouts.main')
@section('title', 'Level Up - Vendas')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('sale.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Adicionar venda</h2>
    </section>
    <section class="form-section">
        <h1>Atualizar venda</h1>

        @if ($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif

        <form action="{{ route('sale.update', $sale->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" name="seller_id" value="{{ $sale->seller_id }}">
            <input type="text" name="value" value="{{ $sale->value }}">
            <input type="text" name="date" value="{{ $sale->date }}">
            <input type="submit" value="enviar">
        </form>
    </section>
@endsection