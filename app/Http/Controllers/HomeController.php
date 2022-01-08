<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $posts = Post::orderby('id','desc')->paginate();
        return view('index');
    }

    public function show(){
        return view('public.details');
    }

    public function login(){
        return view('public.login');
    }

    public function register(){
        return view('public.register');
    }
}
