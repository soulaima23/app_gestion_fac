@extends('adminlte::page')


@section('title')

    Create student | laravel university managment APP

@endsection

@section('content_header')
       <h1> Create student   </h1>
@endsection
@section('content')

  
  <form action="{{route('Students.store') }}" method="POST">
    @csrf
    <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('Students.index') }}"> Back</a>
        </div>
    <div class="form-group">
      <label for="">name:</label>
      <input type="text" class="form-control"   name="name">
    </div> 
    <div class="form-group">
      <label for="">registration number:</label>
      <input type="text" class="form-control"   name="registration_number">
    </div> 
    <div class="form-group">
      <label for="">email:</label>
      <input type="email" class="form-control"   name="mail">
    </div>
    <div class="form-group">
    <label >anniversaire:</label>
      <input type="date" class="form-control"  name="anniversaire">
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
      <label >departement name:</label>
      <select name ="departement_id" class="form-control" placeholder="">
                @foreach ($departements as $departement)
                <option value="{{$departement->id}}">
            {{ $departement->name }}
                </option>

                @endforeach    
                </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

        </form>    
         @endsection
