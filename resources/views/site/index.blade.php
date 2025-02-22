@extends('layouts.template')
@section('title', 'Home')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center py-5 mt-2">
                <h1 class="mt-5">Agenda de Contatos Online</h1>
                <p class="fs-5 mt-4 mb-4 w-50 mx-auto">
                    Organização de contatos de forma rápida e segura, sempre acessível quando precisar
                </p>
                <a href="{{ route('contacts.create') }}"
                    class="btn btn-ls text-decoration-none text-white custom-btn fw-bolder">Novo contato
                </a>
                <a href="{{ route('contacts.index') }}"
                    class="btn btn-ls text-decoration-none text-white ms-2 custom-btn fw-bolder">Lista de contatos
                </a>
            </div>
        </div>
    

        <div class="row text-center">
            <div class="col-lg-4 col-sm-4 col-sm-12 text-center mt-4 mb-4">
                <div class="type-contact mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-sm-12  text-center mt-4 mb-4">
                <div class="type-contact mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-sm-12 text-center mt-4 mb-4">
                <div class="type-contact mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765zM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516M0 13.373l5.693-3.163L0 6.873z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
