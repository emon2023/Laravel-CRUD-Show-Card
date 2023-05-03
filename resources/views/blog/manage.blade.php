@extends('master')


@section('title')
    Manage Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center text-success display-6">Manage Blog</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{session('message')}}</h4>
                            <table class="table table-bordered table-hover text-center">

                                <thead>
                                <tr>
                                    <th>SO NO</th>
                                    <th>Blog Title</th>
                                    <th>Blog Description</th>
                                    <th>Blog Image</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt="" height="100" width="100">
                                    </td>
                                    <td>
                                        <a href="{{route('blog.edit',['id' => $blog->id])}}" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('blog.delete',['id'=> $blog->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this... ')">Delete</a>
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
    </section>

@endsection

