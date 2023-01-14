@extends('layouts.app')


@section('title')

    welcome | laravel university managment APP

@endsection

@section('content')


<div class="container">
  <div class="row my-4">
    
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header bg-light">
        <h5 class="card-title">welcome</h5>
        </div>

        <div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
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
</div>



@endsection