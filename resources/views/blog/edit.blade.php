@extends('master')


@section('title')
    Add Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center text-success display-6">Edit Blog</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{session('message')}}</h4>
                            <form action="{{route('blog.update',['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description"  class="form-control" id="" cols="30" rows="10">{{$blog->description}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($blog->image)}}" alt="" width="150" height="150">
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image') :''}}</span>

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Blog Info">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

