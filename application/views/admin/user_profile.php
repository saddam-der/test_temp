<!DOCTYPE html>
<html lang="en">

<head>
	<!-- head -->
	<?php $this->load->view("admin/template/head.php") ?>
	<!-- head -->
</head>

<body>

	<div class="wrapper ">
		<!-- sidebar -->
		<?php $this->load->view("admin/template/sidebar.php") ?>
		<!-- sidebar -->
		<div class="main-panel">
			<!-- Navbar -->
			<?php $this->load->view("admin/template/navbar.php") ?>
			<!-- End Navbar -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Edit Profile</h4>
									<p class="card-category">Complete your profile</p>
								</div>
								<div class="card-body">
									<form>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label class="bmd-label-floating">ID Petugas</label>
													<input type="text" class="form-control" disabled
														value="<?php echo $this->session->userdata("id"); ?>">
												</div>
											</div>
											<div class="col-md-5 offset-2">
												<div class="form-group">
													<label class="bmd-label-floating">Username</label>
													<input type="text" class="form-control"
														value="<?php echo $this->session->userdata("username"); ?>">
												</div>
											</div>
                                        </div>
                                        <br>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="bmd-label-floating">Name</label>
													<input type="text" class="form-control"
														value="<?php echo $this->session->userdata("nama"); ?>">
												</div>
											</div>
										</div>
                                        <br>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="bmd-label-floating">Email</label>
													<input type="text" class="form-control"
														value="<?php echo $this->session->userdata("email"); ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="bmd-label-floating">Telp</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="bmd-label-floating">Level</label>
													<input type="text" class="form-control" disabled
														value="<?php echo $this->session->userdata("level"); ?>">
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary pull-right">Update Profile</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
                        </div>
                        
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<img class="img " src="../assets/img/faces/marc.jpg" />
								</div>
								<div class="card-body">
									<h6 class="card-category text-gray"><?php echo $this->session->userdata("level"); ?></h6>
									<h4 class="card-title"><?php echo $this->session->userdata("nama"); ?></h4>
									<p class="card-description">
										
                                    </p>
                                    <br><br><br><br>
									<a href="javascript:;" class="btn btn-primary btn-round">Update Photo</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- footer -->
			<?php $this->load->view("admin/template/footer.php") ?>
			<!-- footer -->
		</div>



	</div>
	<!--   Core JS Files   -->
	<script src="<?php echo site_url().'assets/js/core/jquery.min.js'?>"></script>
	<script src="<?php echo site_url().'assets/js/core/popper.min.js'?>"></script>
	<script src="<?php echo site_url().'assets/js/core/bootstrap-material-design.min.js'?>"></script>
	<script src="<?php echo site_url().'assets/js/plugins/perfect-scrollbar.jquery.min.js'?>"></script>
	<!--   Core JS Files   -->

	<script src="<?php echo site_url().'assets/js/plugins/chartist.min.js'?>"></script>
	<script src="<?php echo site_url().'assets/js/plugins/nouislider.min.js'?>"></script>
	<script src="<?php echo site_url().'assets/js/material-dashboard.js'?>" type="text/javascript"></script>


	<script>


	</script>
	<script>

	</script>
</body>

</html>
