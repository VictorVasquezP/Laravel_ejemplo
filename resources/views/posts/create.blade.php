@extends('layouts.dashboard')

@section('title','Home')

@section('content')
    <div class="form-container">
        <h2>Create</h2>
        <div class="form-control">
            <form action="{{route('posts.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" >
                    @error('name')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Description</label>
                    <textarea name="body" id="body" value="{{old('body')}}" ></textarea>
                    @error('body')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" value="{{old('category_id')}}" >
                        <option value="" selected disabled>--seleccione--</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Imagen</label>
                    <div class="drop-zone">
                        <span class="drop-zone__prompt">Drop file here or click to upload</span>
                        <input type="file" name="image" id="image" class="drop-zone__input">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection