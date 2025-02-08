<h1>pagina de edição</h1>




<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    {{-- Proteção contra ataques CSRF --}}
    @csrf
    {{-- Isso informa ao Laravel que estamos enviando um PUT --}}
    @method('PUT')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <label for="name">Nome:</label>
    <input type="text" name="name" value="{{ old('name', $contact->name) }}" required>

    <label for="email">E-mail:</label>
    <input type="email" name="email" value="{{ old('email', $contact->email) }}" required>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" value="{{ old('telefone', $contact->telefone) }}" required>

    <button type="submit">Salvar</button>
</form>
