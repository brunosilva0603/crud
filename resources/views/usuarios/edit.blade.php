@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{ url('usuarios') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    <a href="{{ url('usuarios') }}">Voltar</a>
                    </div>
                    @endif

                    <form action="{{ url('usuarios/add', $usuario->user_id )}}" method="post" oninput='password2.setCustomValidity(password2.value != password.value ? "Passwords do not match." : "")'>
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control" value="{{ $usuario->name }}" placeholder="{{ $usuario->name }}"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login:</label>
                            <input type="text" name="login" class="form-control" value="{{ $usuario->login }}" placeholder="{{ $usuario->login }}"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Digite sua senha</label>
                            <input type="password" name="password" class="form-control" placeholder="{{ $usuario->password }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirme sua senha</label>
                            <input type="password" name="password2" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection