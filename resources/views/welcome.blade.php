@extends('layouts.app')


@section('title')

    welcome | laravel university managment APP

@endsection

@section('content')


<div class="container">
  <div class="row my-5">
    
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header bg-light">
        <h5 class="card-title">welcome</h5>
        </div>

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        @guest
                <a href="{{url('/login')}}" class="btn btn-primary">Login</a>
        @endguest
        @auth
        <a href="{{url('admin/home')}}"  class="btn btn-primary">
            home</a>

        @endauth
 
    </div>
  </div>
</div> 
</div>



@endsection