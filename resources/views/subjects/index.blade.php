@extends('main.main')
@section('main_body')
<br>
<h2>Users table</h2>
<hr>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			@if(session('message'))
				<div class="alert alert-primary" role="alert">
				 	 {{session('message')}}
				</div>
				@endif
			<a href="{{route('subject.create')}}" class="btn btn-info"> Create Subject</a>
			<hr>
		<table id="example" class="table table-striped table-bordered dt-responsive nowrap">
			<thead>
				<tr>
					<th>SL</th>
					<th width="">Subject  Name</th>
					<th width="">Class Name</th>
					<th width="">Teacher Name</th>
					<th>Action</th>
				</tr>

			</thead>
				<tbody>
					@foreach($subjects as $key=>$subject)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$subject->name}}</td>
						<td>{{$subject->class->name}}</td>
						<td>{{$subject->teacher->name}}</td>
						<td>
							<a href="" class="btn btn-info btn-sm fa fa-edit"></a>
							<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			
		</table>
		</div>
		<div class="col-md-2"></div>
	</div>
@endsection