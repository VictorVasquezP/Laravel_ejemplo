@extends('layouts.dashboard')

@section('title','Home')

@section('content')

    <link rel="stylesheet" href="{{asset('css/blog-details.css')}}">
    <a href="{{route('posts.index')}}">Volver</a>
    <div class="post-main">
        <div class="post-left">
            <div class="post-body">
                <img class="post-image" src="{{asset('/storage/'.$image->url)}}" alt="" srcset="">
                <div class="post-text-header">
                    <h2>{{$post->name}}</h2>
                    <div class="post-auth">
                        <h4>Creado por: <span>{{$post->load('user')->user->name}}</span></h4>
                        <h4>Fecha de publicación: <span>{{\Carbon\Carbon::parse($post->created_at)->format('d/m/y')}}</span></h4>
                    </div>
                </div>
                <div class="post-text-description">
                    <p>
                        {{$post->body}}
                    </p>
                </div>
                <div class="post-text-footer">
                    <p>
                        <span>Category</span>: <a href="#">{{$post->load('category')->category->name}}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection