@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar') 
            <div class="col-md-8">
            <i class="fas fa-align-justify"></i>Driver
            <a href="/management/driver/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> 
            Add a driver</a>
            <hr>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Trailer Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="/management/category/{{$category->id}}/edit" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{$categories->links()}}
            <div>
        </div>
    </div>
@endsection 