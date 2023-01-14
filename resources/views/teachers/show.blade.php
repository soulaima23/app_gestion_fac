@extends('adminlte::page')


@section('title')

    Show teacher | laravel university managment APP

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Show details</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('Teachers.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <h1>{{ $teacher->name }}</h1>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>registration_number:</strong>
                {{ $teacher->registration_number }}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>mail:</strong>
                {{ $teacher->mail }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                {{ $teacher->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $teacher->address }}
            </div>
        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type teacher:</strong>
{{ $teacher->type->name }}
        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>created at:</strong>
                {{ $teacher->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>updated at:</strong>
                {{ $teacher->updated_at}}
            </div>
        </div>
@endsection
