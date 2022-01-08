<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function auth(Request $request)
    {
        //Validamos los valores, que no sean vacios
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        $usuario = User::where('email', $email)->first();
        //$password = bcrypt($password);
        
        if (isset($usuario) && Hash::check($password, $usuario->password)) {
                $usuario->password = null;
                session()->put('usuario', $usuario);
                return redirect()->route('posts.index');
        }else{
            return redirect()->route('login');
        }
    }

    public function register()
    {
        return redirect()->route('home');
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
