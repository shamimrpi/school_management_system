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
				<form action="" method="POST">
					@csrf
					<table>
						<thead>
							@foreach($students as $student)
							<tr>
								<th>{{$student->name}}</th>
								
							</tr>
							@endforeach
							@foreach($classes as $class)
							<tr>
								<th>{{$class->name}}</th>
								
							</tr>
							@endforeach
						</thead>
					</table>
					

					<div class="form-group">
						
						<input type="submit" class="btn btn-success" value="submit">
					</div>

				</form>
			</div>
			<div class="col-md-5"></div>
		</div>
	
@endsection
