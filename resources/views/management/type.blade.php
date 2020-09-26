@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar') 
            <div class="col-md-8">
            <i class="fas fa-caravan"></i>Type
            <a href="/management/type/create " class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> 
            Create trailer type</a>
            <hr>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Trailer Type</th>
                        <th scope="col">Price per km</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($types as $type)
                        <tr>
                            <td>{{$type->id}}</td>
                            <td>{{$type->name}}</td>
                            <td>{{$type->price}}</td>
                            <td>
                                <img src="{{asset('type_images')}}/{{$type->image}}" alt="{{$type->name}}"
                                width="120px" height="120px" class="img-thumbnail">
                            </td>
                            <td>{{$type->description}}</td>
                            <td>{{$type->category->name}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          
            <div>
        </div>
    </div>
@endsection 