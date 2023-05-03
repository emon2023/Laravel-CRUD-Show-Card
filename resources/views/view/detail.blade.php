@extends('master')


@section('title')
    Detail Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
               <div class="col">
                   <div class="card card-body">
                       <div class="row">
                           <div class="col-md-6">
                               <img src="{{asset($blog->image)}}" alt="" height="100%" width="100%">
                           </div>
                           <div class="col-md-6">
                               <h1>{{$blog->title}}</h1>
                               <hr/>
                               <p>{{$blog->description}}</p>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>

@endsection

