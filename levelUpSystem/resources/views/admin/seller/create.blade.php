@extends('layouts.main')
@section('title', 'Level Up - Vendedores')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('seller.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Adicionar vendedor</h2>
    </section>
    <section class="form-section">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif

        <form action="{{ route('seller.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nome">
            <input type="email" name="email" placeholder="E-mail">
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
    </section>
@endsection