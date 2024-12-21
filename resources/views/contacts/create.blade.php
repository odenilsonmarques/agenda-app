<h1>bem - vindo ao formulario !</h1>


{{-- esse trecho de código exibe as de validação --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
 
<form action="{{route('contacts.store')}}" method="POST">
    @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
    <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Informa seu nome"><br><br>

    <input type="text" name="email" id="email" value="{{old('email')}}" placeholder="Informe seu email"><br><br>

    <input type="text" name="telefone" id="telefone" value="{{old('telefone')}}" placeholder="Informe seu telefone"><br><br>

   <button type="submit">Enviar</button>
   <a href="{{route('index')}}">Cancelar</a>

</form>