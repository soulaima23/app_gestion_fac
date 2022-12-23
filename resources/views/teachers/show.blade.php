@extends('adminlte::page')


@section('title')

    edit teacher | laravel university managment APP

@endsection

@section('content_header')
       <h1> Create teacher   </h1>
@endsection
@section('content')

  
  <form action="/action_page.php">
    <div class="form-group">
        <h3> {{$teacher->fullname}}</h3>
      <label >registration number:</label>
      <input  class="form-control"  value="{{$teacher->registration_number}}" >
    </div> 
    <div class="form-group">
    <label >specialitee:</label>
      <input type="text" class="form-control"  value="{{$teacher->specialitee}}" name="specialitee">
    </div>
    <div class="form-group">
      <label >contrat:</label>
      <input type="text" class="form-control"  value="{{$teacher->contrat}}" name="contrat">
    </div>
    <div class="form-group">
      <label >phone:</label>
      <input type="text" class="form-control"  value="{{$teacher->phone}}" name="phone">
    </div>
    <div class="form-group">
      <label >address:</label>
      <input type="text" class="form-control"  value="{{$teacher->address}}" name="address">
    </div>
    <div class="form-group">
      <label >city:</label>
      <input type="text" class="form-control"  value="{{$teacher->city}}" name="city">
    </div>
    <div class="form-group">
      <label >niveau:</label>
      <input type="text" class="form-control"  value="{{$teacher->niveau}}" name="niveau">
    </div>
    @csrf
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

        </form>    
         @endsection
