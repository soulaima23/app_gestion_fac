@extends('adminlte::page')


@section('title')

    edit teacher | laravel university managment APP

@endsection

@section('content_header')
       <h1> Create teacher   </h1>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Add new Teacher</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-outline-primary" href="{{ route('Teachers.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{route('Teachers.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>registration_number:</strong>
                <input type="number" name="registration_number" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>name:</strong>
                <input type="text" class="form-control" name="name"  placeholder="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>mail:</strong>
                <input type="email" name="mail" class="form-control" placeholder="">
            </div>
        </div>

    
    
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="number"  name="phone" class="form-control" placeholder=""></input>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>address:</strong>
                <input class="form-control" name="address" placeholder=""></input>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type teacher:</strong>
                <select name ="type_id" class="form-control" placeholder="">
                @foreach ($types as $type)
                <option value="{{$type->id}}">
            {{ $type->name }}
                </option>

                @endforeach    
                </select>
            </div>
        </div>
       
    </div>
   
      
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

</form>

@endsection