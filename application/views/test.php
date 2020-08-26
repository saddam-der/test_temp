<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--     Bootstrap     -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

	<!--     CSS     -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'assets/css/base.css' ?>" />
	<style>
		.masthead {
			height: 100vh;
			min-height: 500px;
			background-image: url('https://images.alphacoders.com/562/thumb-1920-562897.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;

		}

		.darken-pseudo:after {
			content: '';
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			display: block;
			background-color: rgba(0, 0, 0, 0.5);
		}

		.darken-with-text h1 {
			margin: 0;
			font-size: 2em;
			text-align: center;
			color: white;
			padding-top: 50px;
			position: relative;
			z-index: 1;
		}

		

	</style>

	background-color: #9c27b0;

	<title>base</title>
</head>

<body>
	<nav class="navbar navbar-expand navbar-dark  fixed-top"> <button class="navbar-toggler" type="button"
			data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02"
			aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse" id="navbarsExample02">
			<ul class="navbar-nav mr-auto">
				<a class="navbar-brand pl-4">Dreamapps</a>
			</ul>

			<a href="#" class="btn btn-outline mr-2 text-light" data-toggle="modal" data-target="#modalogin">Login</a>
			<a href="#" class="btn btn-outline text-light" data-toggle="modal" data-target="#modalregis">Register</a>
		</div>
	</nav>



	<!-- Full Page Image Header with Vertically Centered Content -->
	<header class="masthead darken-pseudo darken-with-text">
		<div class="container h-100 ">
			<div class="row h-100 align-items-center">
				<div class="col-6 offset-3 text-center ">
					<h1 class="text-light">Selamat Datang di Website Pengaduan Masyarakat</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- Page Content -->
	<section class="py-5">
		<div class="container">
			<h2 class="font-weight-light">Page Content</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ab nulla dolorum autem nisi
				officiis blanditiis voluptatem hic, assumenda aspernatur facere ipsam nemo ratione cumque magnam enim
				fugiat reprehenderit expedita.</p>
				
		</div>
	</section>










	<div class="modal" id="modalogin">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content" style="background-color: #e5e5e5;">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="container">
						<div class="row p-4">
							<div class="col-6"> <br>
								<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Lambang_Kota_Depok.png/463px-Lambang_Kota_Depok.png"
									class="mx-auto d-block" alt="" width="75%">
							</div>
							<div class="col-6 ">
								<div class="">
									<div class="card-body">
										<h5 class="card-title text-center">Login</h5>
										<hr>
										<form class="form-signin" action="<?= base_url('auth'); ?>" method="post">
										<div class="form-label-group">
												<input type="text" name="username" id="inputNama" class="form-control"
													placeholder="Nama" require>
												<label for="inputNama">Nama</label>
												<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>

											<div class="form-label-group">
												<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" require>
												<label for="inputNama">Password</label>
                                        		<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<button class="btn btn-lg btn-primary btn-block text-uppercase"
												type="submit">Login</button>
										</form>
										<hr>
										<p class="text-center"> don't have an account? <br> <a data-toggle="modal"
												href="#modalregis" class="hide-modal">register here</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalregis">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content" style="background-color: #e5e5e5;">
				<!-- style="background-color: #3F729B;" -->
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="container">
						<div class="row">
							<div class="col-6 offset-3 ">
								<div class=" my-5">
									<div class="card-body">
										<h5 class="card-title text-center">Register</h5>
										<hr>
										<form class="form-signin" action="<?= base_url('auth/rakyat_regis'); ?>" method="POST">
											<div class="form-label-group">
												<input type="text" name="username" id="inputUsername" class="form-control"
													placeholder="Username" required autofocus>
												<label for="inputUsername">Username</label>
												
											</div>

											<div class="form-label-group">
												<input type="text" name="name" id="inputnama" class="form-control"
													placeholder="nama" required autofocus>
												<label for="inputnama">Name</label>
												<small class="text-danger text-left"><?= form_error('username'); ?></small>
											</div>

											<div class="form-label-group">
												<input type="password" name="password" id="inputpassword" class="form-control"
													placeholder="password" required autofocus>
												<label for="inputpassword">Password</label>
											</div>

											<div class="form-label-group">
												<input type="email" name="email" id="inputEmail" class="form-control"
													placeholder="Email address" required autofocus>
												<label for="inputEmail">Email address</label>
											</div>

											<div class="form-label-group">
												<input type="text" name="nik" pattern="[0-9]{16}" id="inputNIK"
													class="form-control" placeholder="NIK" required>
												<label for="inputNIK">ID Card Number</label>
											</div>
											<hr>
											<button class="btn btn-lg btn-primary btn-block text-uppercase"
												type="submit">Register</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    
</body>
<script>
	$("#modalregis").on('show.bs.modal', function () {
		$("#modalogin").modal("hide");
	});


	$(document).ready(function () {
		$("#show_hide_password a").on('click', function (event) {
			event.preventDefault();
			if ($('#show_hide_password input').attr("type") == "text") {
				$('#show_hide_password input').attr('type', 'password');
				$('#show_hide_password i').addClass("fa-eye-slash");
				$('#show_hide_password i').removeClass("fa-eye");
			} else if ($('#show_hide_password input').attr("type") == "password") {
				$('#show_hide_password input').attr('type', 'text');
				$('#show_hide_password i').removeClass("fa-eye-slash");
				$('#show_hide_password i').addClass("fa-eye");
			}
		});
	});

</script>


</html>
