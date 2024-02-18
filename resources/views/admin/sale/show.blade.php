

@extends('layouts.main')
@section('title', 'Level Up - Vendedores')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('seller.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Vendedor</h2>
    </section>
    <section class="form-section">
        <p>Vendedor: {{ $sale->seller->name }}</p>
        <p>Valor da venda: {{ $sale->value }}</p>
        <p>Comissão: {{ $sale->commission }}</p>
        <p>Data da venda: {{ $sale->date }}</p>
    </section>
@endsection