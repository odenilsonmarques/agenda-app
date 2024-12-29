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

    //metodo para persistir os dados no banco
    public function store(StoreUpdateContactFormRequest $request)
    {
        //criar o contato com os campos válidos
        Contact::create($request->validated());

        return redirect()->route('contacts.index')->with('success', 'Contato cadastrado com sucesso !');
    }

    //metodo para listar os dados
    public function index()
    {
        // Recupera todos os contatos do banco de dados
        $contacts = Contact::all();
        // dd($contacts);

        // passando a variavel para a view
        return view('contacts.index', compact('contacts'));
    }

    //metodo para excluir um contato
    public function destroy($id){

        // Recupera o registro do contato correspondente ao ID fornecido ou lança uma exceção se não existir
        $contacts = Contact::findOrFail($id);

        $contacts->delete();

        return redirect()->route('contacts.index')->with('success', 'Contato excluído com sucesso !');
    }

    //Este método irá buscar o contato pelo ID e exibir um formulário para edição.
    public function edit($id){
        // Busca o contato pelo ID ou lança um erro 404 se não for encontrado.
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }


}



