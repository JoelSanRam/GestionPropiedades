<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    public function create(Request $request)
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'rol' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->rol = $request->rol;
            $user->password = Hash::make($request->password);
            $user->save();

            \Session::flash('message', 'Usuario creado');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al crear usuario');
        }

        return redirect()->route('usuarios.index');
    }

    
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuarios.update', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'rol' => 'required|string',
        ]);

        try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->rol = $request->rol;
            $user->save();

            \Session::flash('message', 'Usuario Actualizado');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al actualizar datos del usuario');
        }

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        try {
            $user = User::find($id);
            $user->delete();
            \Session::flash('message', 'Registro Eliminado');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al eliminar el registro');
        }

        return redirect()->route('usuarios.index');
    }

    public function change($id)
    {
        $user = User::find($id);
        return view('usuarios.password', compact('user'));
    }

    public function password(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|string|min:8',
        ]);

        try {
            $user = User::find($id);
            $user->password = Hash::make($request->password);
            $user->save();

            \Session::flash('message', 'Contraseña Actualizada');

        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al cambiar contraseña del usuario');
        }

        return redirect()->route('usuarios.index');
    }
}
