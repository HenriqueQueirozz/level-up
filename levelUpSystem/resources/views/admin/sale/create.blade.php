<h1>Inserir venda</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('sale.store') }}" method="POST">
    @csrf
    <input type="text" name="seller_id">
    <input type="text" name="value">
    <input type="text" name="date">
    <input type="submit" value="enviar">
</form>