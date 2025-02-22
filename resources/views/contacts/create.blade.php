@extends('layouts.template')
@section('title', 'novo contato')

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-6 mx-auto">
                <h1 class="mt-5 mb-5">Preencha os campos abaixo !</h1>
                {{-- esse trecho de código exibe as de validação --}}
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
                    <div class="form-floating mb-3">
                        <input type="text" name="name" id="name" class="form-control mb-3"
                            value="{{ old('name') }}" placeholder="Informa seu nome">
                        <label for="floatingInput">Nome</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control mb-3"
                            value="{{ old('email') }}" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="telefone" id="telefone" class="form-control"
                            value="{{ old('telefone') }}" placeholder="Informe seu telefone">
                        <label for="floatingInput">Telefone</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar contato</button>
                    <a href="{{ route('index') }}" class="btn btn-danger btn-sm ms-2">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
