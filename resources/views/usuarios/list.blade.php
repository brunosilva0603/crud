@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('usuarios/new') }}">Novo usuario</a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Lista dos usuarios</h1>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Login</th>
                                <th scope="col">Status</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $usuarios as $u )

                            <tr>
                                <th scope="row">{{ $u->user_id }}</th>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->login }}</td>
                                <td>{{ $u->status }}</td>
                                <td>
                                    <div class="well hidden well-sm" data-target="tabela1">
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a href="{{ url('/usuarios/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                                                <a href="#" type="button" class="btn btn-danger btn-sm">Excluir</a>
                                            </div>
                                        </div>
                                    </div>
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