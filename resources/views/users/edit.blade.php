@extends('layouts.dashboard')

@section('title','Home')

@section('content')
    <div class="form-container">
        <h2>Create</h2>
        <div class="form-control">
            <form action="{{route('users.update',$post,$image)}}" enctype="multipart/form-data" method="POST">
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
                    <label for="email">Email</label>
                    <textarea name="email" id="email" value="{{old('email')}}" ></textarea>
                    @error('email')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <select name="password" id="password" value="{{old('password')}}" >
                        <option value="" selected disabled>--seleccione--</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Avatar</label>
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
