<h1>Inserir Produto</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="text" name="description">
    <input type="text" name="image">
    <input type="text" name="price">
    <input type="text" name="quantity">
    <input type="submit" value="enviar">
</form>