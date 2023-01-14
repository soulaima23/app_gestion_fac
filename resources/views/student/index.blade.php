@extends('adminlte::page')


@section('title')

    list of type student | laravel university managment APP

@endsection

@section('content_header')
       <h1> list of type student   </h1>
@endsection

@section('content')
<div class="container">
  <div class="row my-5">
    
        <div class="">
 <div class="card my-3">
    <div class="card-header">
        <div class="text-center text-uppercase">
           list of student
        </div>
    </div>
 </div>
<div class="card-body">
<a class="btn btn-outline-primary" href="http://127.0.0.1:8000/admin/home"> Back to HOME</a>

<a class="btn btn-outline-primary" href="{{ route('Students.create') }}"> Create new student</a>
  </h4>

</div>
<table id="myTable" class="table table-bordered table-stripped ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">registration number</th>
      <th scope="col">email</th>

      <th scope="col">anniversaire</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">departement name</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($students as $obj)
    <tr>
      <th>{{$obj->id}}</th>
      <td>{{$obj->name}}</td>
      <td>{{$obj->registration_number}}</td>
      <td>{{$obj->mail}}</td>

      <td>{{$obj->anniversaire}}</td>
      <td>{{$obj->phone}}</td>
      <td>{{$obj->address}}</td>  
      <td>{{$obj->departement->name}}</td>
      <td>

      <th class ="d-flex justify-content-center align-items-center">
        <a href="{{route('Students.show',$obj->id)}}"
         class="btn btn-sm btn-primary">
        <i class="fas fa-eye"></i></a>  
        <a href="{{route('Students.edit',$obj->id)}}"
         class="btn btn-sm btn-warning mx-2">
        <i class="fas fa-edit"></i></a>  
        <form action="{{route('Students.destroy', $obj->id)}}"  method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-sm btn-danger">
               <i class="fas fa-trash"></i>
            </button>  
        </form>     
      </th>

    </td> 
</td> 
@endforeach
</tbody>
</table>
</div>


        </div>
    </div> 
</div>

@endsection


