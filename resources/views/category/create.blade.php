@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">
                   @if(count($errors)>0)

                    <ul>
                    @foreach ($errors->all() as $error)
                   
                        <li>
                        <div class="alert alert-warning" role="alert">
                        {{$error}}
                        </div>
                        </li>
                   
                    @endforeach
                    </ul>
                    @endif
                    <form action="{{route('category.store')}}" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="title" class="form-control" name="name"  placeholder="Enter title">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
