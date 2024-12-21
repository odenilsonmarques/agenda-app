<h1>Contatos</h1>

{{-- Essa mensagem é exibida quando o cadastro for validado. Recebemos o parametro success junto com a mensagem --}}
@if(session('success'))
    <p>{{session('success')}}</p>
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
        </tr>
    @endforeach
</table>

<a href="{{route('contacts.create')}}">novo cadastro</a>
<a href="{{route('index')}}">Pagina inicial</a>