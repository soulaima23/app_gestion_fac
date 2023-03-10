@extends('adminlte::page')


@section('title')

Update Employee | laravel university managment APP

@endsection

@section('content_header')
       <h1> Update Employee   </h1>
@endsection
@section('content')
<a class="btn btn-outline-primary" href="{{route('Employees.index') }}"> Back</a>

  
  <form action="{{ route('Employees.update',$employee->id)}}" method="POST">
        @csrf
        @method('PUT')>
  <div class="form-group">

<label for="">full name:</label>
<input type="text" class="form-control" value="{{$employee->fullname}}"   name="fullname">
</div>
    <div class="form-group">

      <label for="">registration number:</label>
      <input type="text" class="form-control" value="{{$employee->registration_number}}"   name="registration_number">
    </div>
    <div class="form-group">
      <label >departement:</label>
      <input type="text" class="form-control"  value="{{$employee->depart}}"  name="depart">
    </div>
    
    
    <div class="form-group">
      <label >hire date:</label>
      <input type="text" class="form-control" value="{{$employee->hire_date}}" name="hire_date">
    </div>
    <div class="form-group">
      <label >phone:</label>
      <input type="text" class="form-control" value="{{$employee->phone}}" name="phone">
    </div>
    
    <div class="form-group">
      <label >address:</label>
      <input type="text" class="form-control" value="{{$employee->address}}" name="address">
    </div>
    <div class="form-group">
      <label >city:</label>
      <input type="text" class="form-control" value="{{$employee->city}}" name="city">
    </div>
    <div class="form-group">
      <label >created at:</label>
      <input type="text" class="form-control"  value="{{$employee->created_at}}"name="created_at">
    </div>
    <div class="form-group">
      <label >updated at :</label>
      <input type="text" class="form-control" value="{{$employee->updated_at}}" name="updated_at">
    </div>
    @csrf
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

        </form>    
         @endsection
