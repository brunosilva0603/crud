@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>
                    <div class="card-header text-center">Projeto Crud</div>
                </h2>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="jumbotron text-center">
                        <h1 class="display-4">Olá !</h1>
                        <p class="lead">Seja bem-vindo meu painel CRUD onde foi utilizado a Framework Laravel, Espero que goste....</p>
                        <hr class="my-4">
                        <p>Para testar as funcionalidades do projeto por favor, clique no botão azul a baixo...</p>
                        <a class="btn btn-primary btn-lg" href="{{ url('usuarios') }}" role="button">Painel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection