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
    
        <div class="">
 <div class="card my-3">
    <div class="card-header">
        <div class="text-center text-uppercase">
           list of teachers
        </div>
    </div>
 </div>
<div class="card-body">
  <h4> <a class="btn btn-primary"href="{{route('Teachers.create')}}" type="button">Add new teacher</a>  </h4>    
<table id="myTable" class="table table-bordered table-stripped ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">regitration_number</th>
      <th scope="col">FullName</th>
      <th scope="col">specialitee</th>
      <th scope="col">Contrat</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Niveau</th>
      <th scope="col">Type_teacher</th>
      <th scope="col">created at</th>
      <th scope="col">Updated at</th>
            <th></th>
    </tr>
  </thead>
  <tbody>
    @forelse ($teachers as $obj)
    <tr>
      <th>{{$obj->id}}</th>
      <th>{{$obj->regitration_number}}</th>
      <td>{{$obj->fullname}}</td>
      <td>{{$obj->specialitee}}</td>
      <td>{{$obj->contrat}}</td>  
          <td>{{$obj->phone}}</td>
          <td>{{$obj->address}}</td>
          <td>{{$obj->city}}</td>
          <td>{{$obj->niveau}}</td>
          <td>{{$obj->type_teacher}}</td>

          <td>{{$obj->created_at}}</td>
          <td>{{$obj->updated_at}}</td>
      <th class ="d-flex justify-content-center align-items-center">
        <a href="{{route('Teachers.show',$obj->id)}}"
         class="btn btn-sm btn-primary">
        <i class="fas fa-eye"></i></a>  
        <a href="{{route('Teachers.edit',$obj->id)}}"
         class="btn btn-sm btn-warning mx-2">
        <i class="fas fa-edit"></i></a>  
        <form action="{{route('Teachers.destroy', $obj->id)}}"  method="POST">
            @method('DELETE')
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


