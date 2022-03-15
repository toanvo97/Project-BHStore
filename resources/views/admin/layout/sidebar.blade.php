@extends('admin.master.master')

@section('sideBar')
<!-- sidebar -->
<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="{{asset('/admin/home')}}" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>
						Home
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="{{asset('/admin/images')}}" class="sidebar-nav-link active">
					<div>
						<i class="fab fa-accusoft"></i>
					</div>
					<span>Image</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tasks"></i>
					</div>
					<span>Menu</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-spinner"></i>
					</div>
					<span>Service</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-check-circle"></i>
					</div>
					<span>Content</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-bug"></i>
					</div>
					<span>Team</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chart-line"></i>
					</div>
					<span>Products</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-book-open"></i>
					</div>
					<span>Contact</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-adjust"></i>
					</div>
					<span>List</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fab fa-algolia"></i>
					</div>
					<span>Promise</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-audio-description"></i>
					</div>
					<span>Comment</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-audio-description"></i>
					</div>
					<span>Setting</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
@endsection
