<h1>Contatos</h1>

{{-- Essa mensagem é exibida quando o cadastro for validado. Recebemos o parametro success junto com a mensagem --}}
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>telefone</th>
        </tr>
    </thead>

    @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->telefone }}</td>
            <td>
                <a href="{{ route('contacts.edit', $contact->id) }}" style="cursor:pointer;">
                    Editar
                </a>
                <!-- Botão de Deletar -->
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="cursor:pointer;"
                        onclick="return confirm('Tem certeza que deseja deletar este contato?')">Deletar
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<a href="{{ route('contacts.create') }}">novo cadastro</a>
<a href="{{ route('index') }}">Pagina inicial</a>
