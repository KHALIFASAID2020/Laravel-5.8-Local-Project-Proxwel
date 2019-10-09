@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

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
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="title" class="form-control" name="title"  placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="content">Description</label>
                            <textarea class="form-control" name="content" rows="8" cols="8"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featured">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
