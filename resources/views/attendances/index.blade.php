@extends('main.main')
@section('main_body')
<br>
<h2>Teachers table</h2>
<hr>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			@if(session('message'))
				<div class="alert alert-primary" role="alert">
				 	 {{session('message')}}
				</div>
				@endif
		
			<hr>
		<table id="example" class="table table-striped table-bordered dt-responsive nowrap">
			<thead>
				<tr>
					<th>SL</th>
					<th width="">Student Name</th>
					<th>Class Name</th>
					<th width="">Present Date</th>
					<th width="">Teacher Name</th>
					<th>Action</th>
				</tr>

			</thead>
				<tbody>
					@foreach($attendances as $key=>$attendance)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$attendance->student->name}}</td>
						<td>{{$attendance->class->name}}</td>
						<td>{{$attendance->present_date}}</td>
						<td>{{$attendance->Teacher->name}}</td>

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