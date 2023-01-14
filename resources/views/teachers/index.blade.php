@extends('adminlte::page')


@section('title')

    list of type teacher | laravel university managment APP

@endsection

@section('content_header')
       <h1> list of teachers   </h1>
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
<a class="btn btn-outline-primary" href="http://127.0.0.1:8000/admin/home"> Back to HOME</a>

<a class="btn btn-outline-primary" href="{{ route('Teachers.create') }}"> Create new teacher</a>
  </h4>

</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<table id="myTable" class="table table-bordered table-stripped ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">regitration_number</th>
      <th scope="col">name</th>
      <th scope="col">mail</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">type teacher</th>

    </tr>
  </thead>
  <tbody>
    @forelse ($teachers as $obj)
    <tr>
      <th>{{$obj->id}}</th>
      <th>{{$obj->registration_number}}</th>
      <td>{{$obj->name}}</td>
      <td>{{$obj->mail}}</td>
          <td>{{$obj->phone}}</td>
          <td>{{$obj->address}}</td>
          <td>{{$obj->type->name}}</td>

        <td>
        
        </td>
          
          <th class ="d-flex justify-content-center align-items-center">
        <a href="{{route('Teachers.show',['Teacher' => $obj->id])}}"
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


