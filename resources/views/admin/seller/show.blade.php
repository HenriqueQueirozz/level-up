@extends('layouts.main')
@section('title', 'Level Up - Vendedores')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('seller.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Vendedor</h2>
    </section>
    <section class="form-section">
        <p><strong>Nome:</strong> {{ $seller->name }}</p>
        <p><strong>E-mail:</strong> {{ $seller->email }}</p>
    </section>
@endsection