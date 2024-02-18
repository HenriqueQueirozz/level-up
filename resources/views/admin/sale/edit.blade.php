@extends('layouts.main')
@section('title', 'Level Up - Vendas')
@section('content')
    <section class="title-section-secondary">
        <a href="{{ route('sale.index') }}"><button class="btn btn-primary"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
        <h2 class="page-title">Atualizar venda</h2>
    </section>
    <section class="form-section">
        @include('components.alert')

        <form action="{{ route('sale.update', $sale->id) }}" method="POST">
            @method('PUT')
            @csrf
            <select name="seller_id">
            @foreach($sellers as $seller)
                <option value="{{ $seller->id }}" {{ $seller->id == $sale->seller_id ? 'selected' : '' }}>{{ $seller->name }}</option>
            @endforeach
            </select>
            <input type="numeric" name="value" value="{{ $sale->value }}">
            <input type="date" name="date" value="{{ $sale->date }}">
            <input type="submit" class="btn btn-primary" value="Atualizar">
        </form>
    </section>
@endsection