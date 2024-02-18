@if ($errors->any())
    <section class="alert-section">    
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </section>
@endif