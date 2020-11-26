<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::where('status', 1)->get();
        return view('usuarios.list', ['usuarios' => $usuarios]);
    }

    public function new()
    {
        return view('usuarios.form');
    }

    public function add(Request $request)
    {
        $usuario = new User;
        //$usuario = $usuario->create($request->all());
        $usuario = $request->all();
        $usuario["password"] = bcrypt($usuario["password"]);
        User::create($usuario);
        return Redirect::to('/usuarios');
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.form', ['usuario' => $usuario]);
    }

    public function update($id, Request $request)
    {
        $usuario = User::findOrFail($id);
        $usuario->update($request->all());
        return Redirect::to('/usuarios');
    }

    public function delete($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return Redirect::to('/usuarios');
    }
}
