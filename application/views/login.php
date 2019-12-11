<body class="bg-info">
	<div class="flashAlert" data-type="<?= $this->session->flashdata('swalType'); ?>" data-text="<?= $this->session->flashdata('swalText'); ?>"></div>
	<div class="container mt-4">
		<!-- Outer Row -->
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 col-md-9">
				<div class="card border-light my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-700 mb-4">Login E - Surat</h1>
							</div>
							<form class="user" action="" method="post">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="username" id="username" autocomplete="off" placeholder="Masukan Username..." value="<?= set_value('username') ?>">
									<?= form_error('username') ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
									<?= form_error('password') ?>
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox small">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">Remember Me</label>
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="<?= base_url('auth/forgot_password') ?>">Forgot Password?</a>
							</div>
							<div class="text-center">
								<a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
