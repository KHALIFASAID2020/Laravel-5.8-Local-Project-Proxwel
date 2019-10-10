@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">list Categories</div>
                <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td scope="row">{{$category->id}}</td>
                        <td scope="row">{{$category->name}}</td>
                        <td>
                            <a href="{{route('category.edit',['id'=>$category->id])}}">
                              {{--  <i class="fas fa-edit"></i> --}}
                              edit
                            </a>
                        </td>
                        <td>
                                <a href="{{route('category.destroy',['id'=>$category->id])}}">
                                  {{--  <i class="fas fa-edit"></i> --}}
                                  delete
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
