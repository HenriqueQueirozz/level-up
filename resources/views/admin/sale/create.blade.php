@extends('layouts.main')
@section('title', 'Level Up - Vendas')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('sale.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Adicionar venda</h2>
    </section>
    <section class="form-section">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif

        <form action="{{ route('sale.store') }}" method="POST">
            @csrf
            <input type="text" name="seller_id" placeholder="Nome">
            <input type="text" name="value" placeholder="Valor da venda">
            <input type="text" name="date" placeholder="Data da venda">
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
    </section>
@endsection