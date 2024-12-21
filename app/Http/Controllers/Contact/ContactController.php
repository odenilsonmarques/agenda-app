<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

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



}



