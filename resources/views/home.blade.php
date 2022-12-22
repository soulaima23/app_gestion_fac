@extends('adminlte::page')


@section('title')

 university managment IIT

@endsection

@section('content_header')
       <h1> Dashboard   </h1>
@endsection


@section('content')
<div class="container">
  <div class="row my-5">
    
        <div class="col-md-4">
    <div class="small-box bg-info">
        <div class="inner"> 
               <h3>{{\App\Models\Employee::count()}} </h3>
               <p> Employee  </p>

            </div>
            <div class="icon">
                <i class="fas fa-users">

                </i>
                <a href="{{url('admin/Employees')}}" class="small-box-footer">
                    More Info  <i class ="fas fa-arrow-circle-right"></i>
             </a>
            </div>
    </div>
  </div>
</div> 

<div class="row my-5">
    
    <div class="col-md-4">
        <div class="small-box bg-info">
            <div class="inner"> 
            <h3>{{\App\Models\Student::count()}} </h3>
            <p> Students  </p>

            </div>
        <div class="icon">
            <i class="fas fa-users">

            </i>
            <a href="{{url('admin/Students')}}" class="small-box-footer">
                More Info  <i class ="fas fa-arrow-circle-right"></i>
         </a>
        </div>
    </div>
</div>

<div class="container">
  <div class="row my-5">
    
    <div class="col-md-4">
        <div class="small-box bg-info">
            <div class="inner"> 
               <h3>{{\App\Models\Teacher::count()}} </h3>
               <p> Teachers  </p>

            </div>
            <div class="icon">
                <i class="fas fa-users">

                </i>
                <a href="{{url('admin/Teachers')}}" class="small-box-footer">
                    More Info  <i class ="fas fa-arrow-circle-right"></i>
             </a>
            </div>
        </div>
  </div>
  </div> 
</div>

@endsection


