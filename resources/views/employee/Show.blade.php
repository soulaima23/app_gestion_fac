@extends('adminlte::page')


@section('title')

    Show Employee | laravel university managment APP

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Show employee</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('Employees.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>registration_number:</strong>
                {{ $employee->registration_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>full name:</strong>
                {{ $employee->fullname }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>departement:</strong>
                {{ $employee->depart }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>hire date:</strong>
                {{ $employee->hire_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone :</strong>
                {{ $employee->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>address :</strong>
                {{ $employee->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>city :</strong>
                {{ $employee->city }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>created at :</strong>
                {{ $employee->created_at }}
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>updated at :</strong>
                {{ $employee->updated_at }}
            </div>
        </div>
    </div>
@endsection
