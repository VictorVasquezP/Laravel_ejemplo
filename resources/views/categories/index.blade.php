@extends('layouts.dashboard')

@section('title','Home')

@include('categories.create')

@include('categories.edit')

@include('categories.delete')

@section('content')
        <h3>POSTS</h3>
        <div>
            <button id="btn-modal-create"> Create </button>
        </div>
        <br />
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead class="thead-elad">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $cont = 1; ?>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$cont}}</td>
                            <td>{{$category->name}}</td>
                            <td><button id="" class="btn-modal-edit" data-id="{{$category->id}}" data-name="{{$category->name}}"> <i class='bx bx-edit-alt' ></i> </button></td>
                            <td><button id="" class="btn-modal-delete" data-id="{{$category->id}}" data-name="{{$category->name}}" > <i class='bx bx-trash'></i> </button></td>
                        </tr>
                        <?php $cont++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
