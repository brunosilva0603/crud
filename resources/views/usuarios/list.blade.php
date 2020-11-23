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
                    @foreach( $usuarios as $u )
                    <p>{{ $u->user_id }} | {{ $u->name }} | {{ $u->login }} | {{ $u->password }} | {{ $u->status }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
