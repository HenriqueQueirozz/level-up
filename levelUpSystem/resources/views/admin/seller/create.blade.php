<h1>Inserir Vendedor</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('seller.store') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="submit" value="enviar">
</form>