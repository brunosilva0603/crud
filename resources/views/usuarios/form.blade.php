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

                    @if( Request::is('*/edit'))
                    <form action="{{ url('usuarios/update') }}/{{ $usuario->id}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control" value="{{ $usuario->name }}"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login:</label>
                            <input type="text" name="user_id" class="form-control" value="{{ $usuario->user_id }}"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Digite sua senha</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirme sua senha</label>
                            <input type="password" name="password2" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                    @else

                    <form action="{{ url('usuarios/add') }}" method="post" oninput='password2.setCustomValidity(password2.value != password.value ? "Passwords do not match." : "")'>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login:</label>
                            <input type="text" name="login" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Digite sua senha</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirme sua senha</label>
                            <input type="password" name="password2" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection