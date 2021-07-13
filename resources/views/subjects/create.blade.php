@extends('main.main')
@section('main_body')
	
		<h1>Create New Subject</h1>
		<hr>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-5">
				@if(session('message'))
				<div class="alert alert-primary" role="alert">
				 	 {{session('message')}}
				</div>
				@endif
				<form action="{{route('subjects.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label>Subject Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter User Name" required="1">
						@if($errors->has('name'))
                         <span class="invalid_feedback" role="alert">
                         <strong style="color:red">{{$errors->first('name')}}</strong>
                        </span>
                       @endif
					</div>

				
					<div class="form-group">
						<label>Select Class</label>
						<select name="class_id" class="form-control">
							@foreach($classes as $class)
							<option value="{{$class->id}}">{{$class->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label>Select Teacher</label>
						<select name="teacher_id" class="form-control">
							@foreach($teachers as $teacher)
							<option value="{{$teacher->id}}">{{$teacher->name}}</option>
							@endforeach
						</select>
					</div>
					

					<div class="form-group">
						
						<input type="submit" class="btn btn-success" value="Create">
					</div>

				</form>
			</div>
			<div class="col-md-5"></div>
		</div>
	
@endsection
