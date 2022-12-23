@extends('adminlte::page')


@section('title')

    edit teacher | laravel university managment APP

@endsection

@section('content_header')
       <h1> edit teacher   </h1>
@endsection
@section('content')

  
  <form method="POST">
@csrf
<div class="form-group">
      <label for="fullname">full name:</label>
      <input type="text" class="form-control"  value="{{old('registration_number',$teacher->fullname)}}" name="fullname">
    </div> 
    <div class="form-group">
      <label for="fullname">registration number:</label>
      <input type="text" class="form-control"  value="{{old('registration_number',$teacher->registration_number)}}" name="fullname">
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
