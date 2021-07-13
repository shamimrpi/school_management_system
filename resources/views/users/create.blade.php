@extends('main.main')
@section('main_body')
	
		<h1>Create New User</h1>
		<hr>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-5">
				@if(session('message'))
				<div class="alert alert-primary" role="alert">
				 	 {{session('message')}}
				</div>
				@endif
				<form action="{{route('users.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter User Name" required="1">
						@if($errors->has('name'))
                         <span class="invalid_feedback" role="alert">
                         <strong style="color:red">{{$errors->first('name')}}</strong>
                        </span>
                       @endif
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" placeholder="Enter User Email " class="form-control" required="1">
						@if($errors->has('email'))
                         <span class="invalid_feedback" role="alert">
                         <strong style="color:red">{{$errors->first('email')}}</strong>
                        </span>
                       @endif
					</div>
					<div class="form-group">
						<label>User Type</label>
						<select name="user_type" class="form-control">
							@foreach($roles as $role)
							<option value="{{$role->id}}">{{$role->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter Password" class="form-control" required="1">
						@if($errors->has('password'))
                         <span class="invalid_feedback" role="alert">
                         <strong style="color:red">{{$errors->first('password')}}</strong>
                        </span>
                       @endif
					</div>

					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="confirm_password" placeholder="Enter Confirm Password" class="form-control" required="1">
						@if($errors->has('confirm_password'))
                         <span class="invalid_feedback" role="alert">
                         <strong style="color:red">{{$errors->first('confirm_password')}}</strong>
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
