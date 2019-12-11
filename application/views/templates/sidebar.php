<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-folder"></i>
			</div>
			<div class="sidebar-brand-text mx-3">E - surat <sup>rpl</sup></div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item" id="dashboardLink">
			<a class="nav-link" href="<?= base_url() ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Profile
		</div>

		<!-- Nav Item - Profile -->
		<li class="nav-item" id="profileLink">
			<a class="nav-link" href="<?= base_url('profile') ?>">
				<i class="fas fa-fw fa-user-edit"></i>
				<span>Ubah Profile</span>
			</a>
		</li>

		<!-- Nav Item - Profile -->
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('profile/ubah_password') ?>">
				<i class="fas fa-fw fa-key"></i>
				<span>Ubah Password</span>
			</a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Surat Masuk
		</div>

		<!-- Nav Item - tambah surat masuk Menu -->
		<li class="nav-item">
			<a class="nav-link" href="#">
				<i class="fas fa-fw fa-file-alt"></i>
				<span>Tambah Surat Masuk</span>
			</a>
		</li>

		<!-- Nav Item - data surat masuk Menu -->
		<li class="nav-item">
			<a class="nav-link" href="#">
				<i class="fas fa-fw fa-chart-area"></i>
				<span>Data Surat Masuk</span>
			</a>
		</li>

		<!-- Nav Item - histori surat masuk Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#historiSuratMasuk" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-fw fa-history"></i>
				<span>Histori Surat Masuk</span>
			</a>
			<div id="historiSuratMasuk" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Surat Terakhir</h6>
					<a class="collapse-item" href="utilities-color.html">Surat</a>
					<a class="collapse-item" href="utilities-border.html">Surat</a>
					<a class="collapse-item" href="utilities-animation.html">Surat</a>
					<a class="collapse-item" href="utilities-other.html">Surat</a>
				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Surat Keluar
		</div>

		<!-- Nav Item - tambah surat keluar Menu -->
		<li class="nav-item">
			<a class="nav-link" href="#">
				<i class="fas fa-fw fa-file-alt"></i>
				<span>Tambah Surat Keluar</span>
			</a>
		</li>

		<!-- Nav Item - data surat keluar Menu -->
		<li class="nav-item">
			<a class="nav-link" href="#">
				<i class="fas fa-fw fa-chart-area"></i>
				<span>Data Surat keluar</span>
			</a>
		</li>

		<!-- Nav Item - histori surat keluar Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#historiSuratKeluar" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-fw fa-history"></i>
				<span>Histori Surat keluar</span>
			</a>
			<div id="historiSuratKeluar" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Surat Terakhir</h6>
					<a class="collapse-item" href="utilities-color.html">Surat</a>
					<a class="collapse-item" href="utilities-border.html">Surat</a>
					<a class="collapse-item" href="utilities-animation.html">Surat</a>
					<a class="collapse-item" href="utilities-other.html">Surat</a>
				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Addons
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
				<i class="fas fa-fw fa-folder"></i>
				<span>Pages</span>
			</a>
			<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Login Screens:</h6>
					<a class="collapse-item" href="login.html">Login</a>
					<a class="collapse-item" href="register.html">Register</a>
					<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
					<div class="collapse-divider"></div>
					<h6 class="collapse-header">Other Pages:</h6>
					<a class="collapse-item" href="404.html">404 Page</a>
					<a class="collapse-item active" href="blank.html">Blank Page</a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Charts -->
		<li class="nav-item">
			<a class="nav-link" href="charts.html">
				<i class="fas fa-fw fa-chart-area"></i>
				<span>Charts</span></a>
		</li>

		<!-- Nav Item - Tables -->
		<li class="nav-item">
			<a class="nav-link" href="tables.html">
				<i class="fas fa-fw fa-table"></i>
				<span>Tables</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->
