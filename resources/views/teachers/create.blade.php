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
      <label for="">full Name:</label>
      <input type="text" class="form-control"   name="fullname">
    </div> 
    <div class="form-group">
    <label >specialitee:</label>
      <input type="text" class="form-control"  name="specialitee">
    </div>
    <div class="form-group">
      <label >contrat:</label>
      <input type="text" class="form-control" name="contrat">
    </div>
    <div class="form-group">
      <label >phone:</label>
      <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
      <label >address:</label>
      <input type="text" class="form-control" name="address">
    </div>
    <div class="form-group">
      <label >city:</label>
      <input type="text" class="form-control"  name="city">
    </div>
    <div class="form-group">
      <label >niveau:</label>
      <input type="text" class="form-control" name="niveau">
    </div>
    @csrf
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

        </form>    
         @endsection
