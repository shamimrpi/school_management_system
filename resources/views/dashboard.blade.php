@extends('main.main')
@section('main_body')
<div class="container">
   @if(session('message'))
        <div class="alert alert-info" role="alert">
           {{session('message')}}
        </div>
        @endif
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-users"></i>
        <span class="count-numbers">{{$users->count()}}</span>
        <span class="count-name">All Users</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fas fa-chalkboard"></i>
        <span class="count-numbers">{{$classes->count()}}</span>
        <span class="count-name">Classes</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fas fa-chalkboard-teacher"></i>
        <span class="count-numbers">{{$teachers->count()}}</span>
        <span class="count-name">Teachers</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fas fa-user-graduate"></i>
        <span class="count-numbers">{{$students->count()}}</span>
        <span class="count-name">Students</span>
      </div>
    </div>
  </div>
</div>
@endsection