@extends('adminlte::page')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>edit student</h2>
            </div>
            <a class="btn btn-outline-primary" href="{{ route('Students.index') }}"> Back</a>

            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('Students.index') }}"> Retour</a>
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

  
    <form action="{{ route('Students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>name :</strong>
                <input type="text" name="name" value="{{ $student->name }}"class="form-control" placeholder="Saisir un numéro">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>registration number:</strong>
                <input type="text" name="registration_number" value="{{ $student->registration_number }}"class="form-control" placeholder="Saisir un numéro">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>email:</strong>
                <input type="email" name="mail" value="{{ $student->mail }}"class="form-control" placeholder="Saisir un numéro">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>anniversaire:</strong>
                <input type="date" name="anniversaire" value="{{ $student->anniversaire }}" class="form-control" placeholder="Saisir un libellé">
            </div>
        </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="Saisir un stock">
            </div>
        </div>
        
    <div class="form-group">
      <label >address:</label>
      <input type="text" class="form-control" value="{{$student->address}}" name="address">
    </div>
   
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>departement name:</strong>
                <select name="departement_id" id="">
                @foreach($departements as $departement)
                    <option value="{{$departement->id}}">
                        {{ $departement->name }}
                        
                    </option>
                @endforeach
                </select>
                
            </div>
        </div>
    <div class="form-group">
      <label >created at:</label>
        <input type="date" class="form-control" value="{{$student->created_at}}" placeholder ="{{$student->created_at}}" onblur="(this.type='text')" onfocus="(this.type='date')"  name="created_at" >   
     </div>
    <div class="form-group">
      <label >updated at :</label>
      <input type="date" class="form-control" value="{{$student->updated_at}}" placeholder ="{{$student->updated_at}}" onblur="(this.type='text')" onfocus="(this.type='date')"  name="updated_at">
    </div>

    </div>           
    @csrf
    <button type="submit" class="btn btn-default">Submit</button>
   
    </form>
@endsection