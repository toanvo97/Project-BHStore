@extends('admin.master.master')

@section('css')
<!-- Set logo tab -->
<link rel="icon" type="image/png" href="assets/img/logo-bh-1.png"/>

<!-- Import lib -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('client/assets/fontawesome-free/css/all.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<!-- End import lib -->

<!-- <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css"> -->

<link rel="stylesheet" type="text/css" href="{{asset('client/assets/css/style-ad.css')}}">
@endsection

@section('sideBar')
    @include('admin.layout.sidebar')
@endsection

@section('navBar')
    @include('admin.layout.navbar')
@endsection

@section('main')
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3>100+</h3>
					<p>To do</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>100+</h3>
					<p>In progress</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>100+</h3>
					<p>Completed</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-bug"></i>
					</p>
					<h3>100+</h3>
					<p>Issues</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Table
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Project</th>
									<th>Manager</th>
									<th>Status</th>
									<th>Due date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>React</td>
									<td>Tran Anh Tuat</td>
									<td>
										<span class="dot">
											<i class="bg-success"></i>
											Completed
										</span>
									</td>
									<td>17/07/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Vue</td>
									<td>Bui Nhu Sang</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											In progress
										</span>
									</td>
									<td>18/07/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Laravel</td>
									<td>Phan Nhat Truong</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											In progress
										</span>
									</td>
									<td>17/07/2020</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Django</td>
									<td>Le Anh Tuan</td>
									<td>
										<span class="dot">
											<i class="bg-danger"></i>
											Delayed
										</span>
									</td>
									<td>07/07/2020</td>
								</tr>
								<tr>
									<td>5</td>
									<td>MEAN</td>
									<td>John Evan</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pending
										</span>
									</td>
									<td>20/08/2020</td>
								</tr>
								<tr>
									<td>6</td>
									<td>MERN</td>
									<td>Robert</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pending
										</span>
									</td>
									<td>20/08/2020</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Progress bar
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
							<p>
								Less than 1 hour
								<span class="float-right">50%</span>
							</p>
							<div class="progress">
								<div class="bg-success" style="width: 50%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								1 - 3 hours
								<span class="float-right">60%</span>
							</p>
							<div class="progress">
								<div class="bg-primary" style="width:60%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								More than 3 hours
								<span class="float-right">40%</span>
							</p>
							<div class="progress">
								<div class="bg-warning" style="width:40%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								More than 6 hours
								<span class="float-right">20%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:20%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Chartjs
						</h3>
					</div>
					<div class="card-content">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
@stop

@section('js')
<!-- import script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="{{asset('client/assets/js/index.js')}}"></script>
<!-- end import script -->
@endsection
