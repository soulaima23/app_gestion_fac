@extends('adminlte::page')


@section('title')

    list of type teacher | laravel university managment APP

@endsection

@section('content_header')
       <h1> list of type teacher   </h1>
@endsection


@section('content')
<div class="container">
  <div class="row my-5">
    
        <div class="col-md-6 mx-auto">
 <div class="card my-3">
    <div class="card-header">
        <div class="text-center text-uppercase">
            type_teacher
        </div>
    </div>
 </div>
<div class="card-body">
<table id="myTable" class="table table-bordered table-stripped ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">FullName</th>
      <th scope="col">Department</th>
      <th scope="col">Hired</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @forelse ($type_res as $obj)
    <tr>
      <th>{{$obj->id}}</th>
      <td>{{$obj->fullname}}</td>
      <td>{{$obj->specialitee}}</td>
      <td>{{$obj->phone}}</td>
      <th class ="d-flex justify-content-center align-items-center">
        <a href="{{route('Employees.show',$employee->registration_number)}}"
         class="btn btn-sm btn-primary">
        <i class="fas fa-eye"></i></a>  
        <a href="{{route('Employees.edit',$employee->registration_number)}}"
         class="btn btn-sm btn-warning mx-2">
        <i class="fas fa-edit"></i></a>  
        <form action="{{route('Employees.destroy', $employee->registration_number)}}"  method="POST">
            @method('DELET')
            @csrf
            <button type="submit"
         class="btn btn-sm btn-danger">
        <i class="fas fa-trash"></i></button>  
        </form>     
      </th>

    </tr>  
@endforeach
</tbody>
</table>
</div>


        </div>
    </div> 
</div>

@endsection


