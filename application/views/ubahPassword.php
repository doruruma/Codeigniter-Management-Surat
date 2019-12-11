<body id="page-top">

	<div class="container-fluid">
		<h1 class="h4 mb-5 text-gray-800">E - Surat / <a href="<?= base_url('profile/ubah_password') ?>">Ubah Password</a></h1>
		<div class="row">
			<div class="col-md-8">
				<p class="h6">Form Ubah Password</p>
				<div class="card border-left-primary">
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="">Password Lama</label>
								<input type="password" class="form-control" id="oldPass" name="oldPass" placeholder="Masukan Password Lama">
							</div>
							<div class="form-group">
								<label for="">Password Baru</label>
								<input type="password" class="form-control" id="newPass" name="newPass" placeholder="Masukan Password Baru">
							</div>
							<div class="form-group">
								<label for="">Konfirmasi Password</label>
								<input type="password" class="form-control" id="confirmPass" name="confirmPass" placeholder="Ketikan Ulang Password">
							</div>
							<div class="form-group float-right">
								<button class="btn btn-sm btn-primary" type="submit">Submit</button>
								<button class="btn btn-sm btn-warning" type="reset">Reset</button>
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
