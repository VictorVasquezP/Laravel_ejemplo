@extends('layouts.dashboard')

@section('title','Home')

@section('content')
        <h3>POSTS</h3>
        <div>
            <a href="{{route('posts.create')}}"><button class="btn-create">Create</button></a>
        </div>
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead class="thead-elad">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Show</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $cont = 1; ?>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$cont}}</td>
                            <td>{{$post->name}}</td>
                            <td>{{$post->load('category')->category->name}}</td>
                            <td><a href="{{route('posts.show',$post)}}" > <i class='bx bx-info-circle'></i> </a></td>
                            <td><a href="{{route('posts.edit',$post)}}" > <i class='bx bx-edit-alt' ></i> </a></td>
                            <td>
                                <form action="{{route('posts.destroy',$post)}}" method="POST" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit"><i class='bx bx-trash'></i></button>
                                </form>
                        </tr>
                        <?php $cont++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
