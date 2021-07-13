<div class="asidebar">
		<ul class="asidebar_menubar">
			
			@if(Auth::user()->user_type == 1)
			<li><a href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
			<li><a href="{{route('users.all')}}"><i class="fas fa-chalkboard-teacher"></i> All Users</a></li>
			<li><a href="{{route('subjects.all')}}"><i class="fas fa-user-graduate"></i> Subjects</a></li>
			<li><a href="{{route('classes.all')}}"><i class="fas fa-chalkboard"></i> Classes</a></li>
			@endif
			@if(Auth::user()->user_type == 2)
			<li><a href="{{route('teachers.all')}}"><i class="fas fa-chalkboard-teacher"></i> Teachers</a></li>
			@endif
			@if(Auth::user()->user_type == 3)
			<li><a href="{{route('students.all')}}"><i class="fas fa-user-graduate"></i> Students</a></li>
			@endif
			<li><a href="#"><i class="fas fa-bible"></i> Attendance</a></li>
			<li><a onclick="return confirm('Are you sure logout this session')" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
		</ul>
	</div>
