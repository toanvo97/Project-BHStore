@extends('admin.master.master')

@section('title','Quản trị hình ảnh')

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

<style>
    .img-preview{
        width: 300px;
        min-height: 100px;
        border: 2px dashed #c8c8c8;
        border-radius: 0.5rem;
        margin-top: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: #cccccc;
    }

    .img-preview-image{
        display: none;
        width: 100%;
    }
</style>
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
		<h2 class="card-content">Images Management</h2>
		<div class="card">
			<form action="">
				<div class="card-body">
					<div class="form-group">
						<div class="row">
							<div class="col-6">
                                <p class="img-name"><span class="text-danger">*</span>Chú thích tên cho hình ảnh: </p>
								<input class="form-control" type="text" name="name" id="name" placeholder="Điền tên">
							</div>
							<div class="col-6" >
                                <div class="column-title"> <p class="img-name"><span class="text-danger">*</span>Chọn hình ảnh: </p></div>
								<!-- <div style="z-index: 1; top: 0;bottom: 0; border: 2px dashed #c8c8c8; border-radius: 0.5rem;">

									<img id="image" src="{{asset('client/assets/img/bg_box.png')}}" alt="Your image" style="width: 2px; height: 20px; margin: 2rem; display: block;">
								</div> -->
                                <input class="form-control" type='file' name="img" id="img">
                                <div class="img-preview" id="imgPreview">
                                    <img src="" alt="Select imgage you want" class="img-preview-image">
                                    <span class="img-preview--default-text">Your Upload Image</span>
                                </div>
							</div>
						</div>
						<div class="row">

						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- end main content -->
@stop

@section('js')
<!-- import script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="{{asset('client/assets/js/index.js')}}"></script>
	<!-- end import script -->

	<!-- Image reader from file chosen -->
	<!-- <script>
		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script> -->
    <script>
        const img = document.getElementById("img");
        const previewContainer = document.getElementById("imgPreview");
        const previewImg = previewContainer.querySelector(".img-preview-image");
        const previewDefaultText = previewContainer.querySelector(".img-preview--default-text");
        img.addEventListener("change",function(){
            const file = this.files[0];

            if(file){
                const reader = new FileReader();

                previewDefaultText.style.display = "none";
                previewImg.style.display = "block";

                reader.addEventListener("load", function(){
                    console.log(this);
                    previewImg.setAttribute("src", this.result);
                })

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
