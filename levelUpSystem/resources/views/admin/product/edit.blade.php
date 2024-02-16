<h1>Atualizar Produto</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('product.update', $product->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="name" value="{{ $product->name }}">
    <input type="text" name="description" value="{{ $product->description }}">
    <input type="text" name="image" value="{{ $product->image }}">
    <input type="text" name="price" value="{{ $product->price }}">
    <input type="text" name="quantity" value="{{ $product->quantity }}">
    <input type="submit" value="enviar">
</form>