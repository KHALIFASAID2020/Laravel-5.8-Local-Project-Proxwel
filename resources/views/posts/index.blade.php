@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">list post</div>
                <div class="card-body">
                <table class="table">
{{--                         'title', 'content', 'category_id','featured','slug'
 --}}
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>

                        <td scope="row">{{$post->title}}</td>
                        <td scope="row">{{$post->content}}</td>
                        <td scope="row">
                            <img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="100px">
                        </td>
                        <th scope="col">{{$post->created_at}}</th>


                        <td>
                            edit
                           {{--  <a href="{{route('post.edit',['id'=>$post->id])}}">

                              edit
                            </a> --}}
                        </td>
                        <td>

                             <a href="{{route('post.destroy',['id'=>$post->id])}}">

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
