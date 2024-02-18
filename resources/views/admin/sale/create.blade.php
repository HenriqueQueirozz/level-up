@extends('layouts.main')
@section('title', 'Level Up - Vendas')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('sale.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Adicionar venda</h2>
    </section>
    <section class="form-section">
        @include('components.alert')

        <form action="{{ route('sale.store') }}" method="POST">
            @csrf
            <select name="seller_id">
            @foreach($sellers as $seller)
                <option value="{{ $seller->id }}">{{ $seller->name }}</option>
            @endforeach
            </select>
            <input type="numeric" name="value" placeholder="Valor da venda">
            <input type="date" name="date" value="{{ date('Y-m-d') }}" placeholder="Data da venda">
            <input type="submit" class="btn btn-primary" value="Adicionar">
        </form>
    </section>
@endsection