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
      <label for="">registration number:</label>
      <input type="text" class="form-control"   name="registration_number">
    </div> 
    <div class="form-group">
    <label >full name:</label>
      <input type="text" class="form-control"  name="fullname">
    </div>
    <div class="form-group">
      <label >departement:</label>
      <input type="text" class="form-control" name="departement">
    </div>
    
    
    <div class="form-group">
      <label >hire date:</label>
      <input type="text" class="form-control" name="hire_date">
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
      <label >created at:</label>
      <input type="text" class="form-control" name="created_at">
    </div>
    <div class="form-group">
      <label >updated at :</label>
      <input type="text" class="form-control" name="updated_at">
    </div>
    
    @csrf
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

        </form>    
         @endsection
