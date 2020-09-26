@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="/management/category" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i> Trailer Category</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-caravan"></i> Trailer Type</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-truck-moving"></i> Driver</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-users-cog"></i></i> User</a>
                </div>
            </div>  
            <div class="col-md-8">
            <i class="fas fa-align-justify"></i>Edit a Trailer Category
            <hr>
            <form action="/management/category/{{category->id}}" method="POST">
             @csrf
             @method('PUT')
            <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control"
                placeholder="Category...">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <div>
        </div>
    </div>
@endsection 