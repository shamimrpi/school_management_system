@extends('main.main')
@section('main_body')
	
		<h1>Create New Class</h1>
		<hr>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-5">
				@if(session('message'))
				<div class="alert alert-primary" role="alert">
				 	 {{session('message')}}
				</div>
				@endif
				<form action="{{route('classes.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label>Class Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter Class Name" required="1">
						@if($errors->has('name'))
                         <span class="invalid_feedback" role="alert">
                         <strong style="color:red">{{$errors->first('name')}}</strong>
                        </span>
                       @endif
					</div>

				
					
					

					<div class="form-group">
						
						<input type="submit" class="btn btn-success" value="Create">
					</div>

				</form>
			</div>
			<div class="col-md-5"></div>
		</div>
	
@endsection
