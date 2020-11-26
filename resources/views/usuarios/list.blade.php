@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('/') }}" class="btn btn-info">Home </a></td> | <a href="{{ url('usuarios/new') }}" class="btn btn-success">Novo usuario</a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h2>
                    <div class="card-header text-center">Cadastrados</div>
                </h2>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Login</th>
                                <th scope="col">Status</th>
                                <th colspan="2">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $usuarios as $u )
                            <tr>
                                <th scope="row">{{ $u->id }}</th>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->user_id }}</td>
                                <td>{{ $u->status }}</td>
                                <td>
                                    <a href="usuarios/{{ $u->id }}/edit" class="btn btn-warning">Editar </a></td>
                                <td>
                                    <form action="usuarios/delete/{{ $u->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection