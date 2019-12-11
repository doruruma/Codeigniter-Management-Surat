<body id="page-top">
	<div class="flashAlert" data-type="<?= $this->session->flashdata('swalType'); ?>" data-text="<?= $this->session->flashdata('swalText'); ?>"></div>
	<div class="container-fluid">
		<h1 class="h4 mb-5 text-gray-800">E - Surat / <a href="<?= base_url('profile') ?>">Profile</a></h1>
		<div class="row">
			<div class="col-md-8">
				<p class="h5">Edit Profile Anda</p>
				<div class="card border-left-primary">
					<div class="card-body">
					<?= form_open_multipart('profile') ?>
							<div class="row no-gutters">
								<div class="col-md-3 py-1">
									<img src="<?= base_url('assets/img/profile/' . $user['img']); ?>" class="img-fluid rounded" style="width:140px; height:100px">
								</div>
								<div class="col-md-9 py-1">
									<div class="custom-file mt-4">
										<input type="file" class="custom-file-input" id="profile" name="profile">
										<label class="custom-file-label" for="profile" aria-describedby="inputGroupFileAddon02">Choose file</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
								<?= form_error('username') ?>
							</div>
							<div class="form-group">
								<button class="btn btn-sm btn-primary" type="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	<!-- End of Main Content -->

	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; Your Website 2019</span>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
