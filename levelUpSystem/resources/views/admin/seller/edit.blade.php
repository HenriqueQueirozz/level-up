<h1>Atualizar Vendedor</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('seller.update', $seller->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="name" value="{{ $seller->name }}">
    <input type="text" name="email" value="{{ $seller->email }}">
    <input type="submit" value="enviar">
</form>