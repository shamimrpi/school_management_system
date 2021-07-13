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
					<th width="">Name</th>
					<th width="">Email</th>
					<th width="">User Type</th>
					<th>Action</th>
				</tr>

			</thead>
				<tbody>
					@foreach($teachers as $key=>$teacher)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$teacher->name}}</td>
						<td>{{$teacher->email}}</td>
						<td>{{$teacher->role->name}}</td>
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