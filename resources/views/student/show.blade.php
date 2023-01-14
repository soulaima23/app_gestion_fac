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
                <a class="btn btn-outline-primary" href="{{ route('Students.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <h1>{{ $student->name }}</h1>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>registration_number:</strong>
                {{ $student->registration_number }}
            </div>
        </div>
        
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>mail:</strong>
                {{ $student->mail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>anniversaire:</strong>
                {{ $student->anniversaire }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                {{ $student->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $student->address }}
            </div>
        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>departement name:</strong>
{{ $student->departement->name }}
        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>created at:</strong>
                {{ $student->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>updated at:</strong>
                {{ $student->updated_at}}
            </div>
        </div>
@endsection
