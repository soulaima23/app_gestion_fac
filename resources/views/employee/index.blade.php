@extends('adminlte::page')


@section('title')

    list of Employee | laravel university managment APP

@endsection

@section('content_header')
       <h1> list of Employee   </h1>
@endsection


@section('content')
<div class="container">
  <div class="row my-4">
   <div class="">
        <div class="card my-3">
            <div class="card-header">
                <div class="text-center text-uppercase">
                  list of Employee
                </div>
            </div>
        </div>
<div class="card-body">
<a class="btn btn-outline-primary" href="http://127.0.0.1:8000/admin/home"> Back to HOME</a>

<a class="btn btn-outline-primary" href="{{ route('Employees.create') }}"> Create new Employee</a>
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
                      <th scope="col">regitration_number</th>
                      <th scope="col">FullName</th>
                      <th scope="col">tache</th>
                      <th scope="col">date anniversaire</th>
                      <th scope="col">phone</th>
                      <th scope="col">Address</th>
                      <th scope="col">City</th>
                      <th scope="col">created at</th>
                      <th scope="col">Updated at</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($employes as $obj)
                    <tr>
                      <th>{{$obj->registration_number}}</th>
                      <th>{{$obj->fullname}}</th>
                      <th>{{$obj->depart}}</th>
                      <th>{{$obj->hire_date}}</th>  
                      <th>{{$obj->phone}}</th>
                      <th>{{$obj->address}}</th>
                      <th>{{$obj->city}}</th>
                      <th>{{$obj->created_at}}</th>
                      <th>{{$obj->updated_at}}</th>
<th>
                      <th class ="d-flex justify-content-center align-items-center">
                            <a href="{{route('Employees.show',['Employee' => $obj->id])}}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>  
                            <a href="{{route('Employees.edit',['Employee' => $obj->id])}}" class="btn btn-sm btn-warning mx-2">
                                 <i class="fas fa-edit"></i>
                            </a>  
                            <form action="{{route('Employees.destroy',['Employee' =>$obj->id])}}"  method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>  
                            </form>     
                      </th>
</th>
                    </tr>  

                @endforeach
                </tbody>
  </table>
        </div>
    </div> 
</div>
</div>

</div>
@endsection


