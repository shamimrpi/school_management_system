<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('adminPanel')}}/assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('adminPanel')}}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('adminPanel')}}/assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

</head>
<body>
	<div class="header_bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-sm-2">
					<a href=""><i class="fas fa-book-open home_icon"></i></a>
				</div>
				<div class="col-md-10 col-sm-10">

					
					  <a class="user_photo"><i class="fas fa-user-alt logout_font"></i>
					 
						<span class="user_name">{{Auth::user()->name}}</span>
					</a>
				</div>
		</div>
	</div>
</div>