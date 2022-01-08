@extends('layouts.dashboard')

@section('title','Home')

@section('content')
    <div class="form-container">
        <h2>Create</h2>
        <div class="form-control">
            <form action="{{route('posts.update',$post)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{old('name',$post->name)}}" >
                    @error('name')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Description</label>
                    <textarea name="body" id="body" >{{old('body',$post->body)}}</textarea>
                    @error('body')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" value="{{old('category_id',$post->category_id)}}" >
                        <option value="" selected disabled>--seleccione--</option>
                        @foreach ($categories as $category)
                            @if ($category->id == $post->category_id)
                                <option value="{{$category->id}}" selected >{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                            
                        @endforeach
                    </select>
                </div>
                <div class="images">
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <div class="drop-zone">
                            <span class="drop-zone__prompt">Drop file here or click to upload</span>
                            <input type="file" name="image" id="image" class="drop-zone__input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen actual</label>
                        <img src="{{asset('/storage/'.$image->url)}}" alt="" srcset="">
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn-submit">Save</button>
                </div>
                <div class="form-group">
                    <button type="button" class="btn-submit"> <a href="{{route('posts.index')}}">Cancelar y volver</a></button>
                </div>
            </form>
        </div>
    </div>
@endsection