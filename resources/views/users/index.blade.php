@extends('layouts.dashboard')

@section('title','Home')

@section('content')
        <h3>POSTS</h3>
        <div>
            <a href="{{route('users.create')}}"><button class="btn-create">Create</button></a>
        </div>
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead class="thead-elad">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Show</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $cont = 1; ?>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$cont}}</td>
                            <td>{{$user->name}}</td>
                            <td><a href="{{route('posts.show',$user)}}" > <i class='bx bx-info-circle'></i> </a></td>
                            <td><a href="{{route('posts.edit',$user)}}" > <i class='bx bx-edit-alt' ></i> </a></td>
                            <td><a href="{{route('posts.destroy',$user)}}" > <i class='bx bx-trash'></i> </a></td>
                        </tr>
                        <?php $cont++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
