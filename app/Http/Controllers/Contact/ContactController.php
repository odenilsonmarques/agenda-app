<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ContactController extends Controller
{
    //metodo para chamar o formulário de contato
    public function create()
    {
        return view('contacts.create');
    }

    //metodo para persistir os dados que foram preenchidos no formulário
    public function store(StoreUpdateContactFormRequest $request)
    {
        //criar o contato com os campos válidos
        Contact::create($request->validated());
        return redirect()->route('contacts.index')->with('success', 'Contato cadastrado com sucesso !');
    }

    //metodo para listar os dados
    public function index()
    {
        // Recupera todos os contatos persistidos
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    //metodo para excluir um contato
    public function destroy($id)
    {
        // Recupera o registro do contato correspondente ao ID fornecido ou lança uma exceção 404 se não existir
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        return redirect()->route('contacts.index')->with('success', 'Contato excluído com sucesso !');
    }

    //Este método irá buscar o contato pelo ID e exibir um formulário para edição.
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    // Este método recebe os dados do formulario editado e atualiza o registro no banco
    public function update(StoreUpdateContactFormRequest $request, $id)
    {
        $contact = Contact::findOrFail($id);

        // Depuração
        // dd($contact, $request->all());

        // Atualiza os dados
        $contact->update($request->only(['name', 'email']));

        return redirect()->route('contacts.index')->with('success', 'Contato atualizado com sucesso');
    }
}
