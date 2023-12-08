<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet"
		href="<?= site_url('assets/skydash/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/skydash/') ?>js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= site_url('assets/skydash/') ?>images/favicon.png" />
	<!-- Place the first <script> tag in your HTML's <head> -->
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		setInterval(function(){ $(".alert").fadeOut(); }, 3000);
	</script>
</head>
<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand brand-logo mr-5" href="<?= base_url('') ?>"><img
						src="<?= site_url('assets/skydash/') ?>images/logo.svg" class="mr-2" alt="logo" /></a>
				<a class="navbar-brand brand-logo-mini" href="<?= site_url('admin') ?>"><img
						src="<?= site_url('assets/skydash/') ?>images/logo-mini.svg" alt="logo" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="icon-menu"></span>
				</button>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown">

						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
							aria-labelledby="notificationDropdown">
							<p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-success">
										<i class="ti-info-alt mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-normal">Application Error</h6>
									<p class="font-weight-light small-text mb-0 text-muted">
										Just now
									</p>
								</div>
							</a>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-warning">
										<i class="ti-settings mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-normal">Settings</h6>
									<p class="font-weight-light small-text mb-0 text-muted">
										Private message
									</p>
								</div>
							</a>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-info">
										<i class="ti-user mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-normal">New user registration</h6>
									<p class="font-weight-light small-text mb-0 text-muted">
										2 days ago
									</p>
								</div>
							</a>
						</div>
					</li>
					<div class="nav-item d-flex align-items-left">
						<?= $judul_halaman ?>
					</div class>
					<div class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle" href="<?= site_url('admin/home/') ?>"
							data-bs-toggle="dropdown" id="profileDropdown" aria-expanded="true">
							<img src="<?= site_url('assets/skydash/') ?>images/faces/face29.jpg"  />
							<span class="d-none d-lg-inline-right"><?= $this->session->userdata('nama') ?></span>
							<small class="text-muted"><?= $this->session->userdata('level') ?></small>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown"
							aria-labelledby="profileDropdown">
							<a class="dropdown-item">
								<i class="ti-settings text-primary"></i>
								Password
								<a class="dropdown-item" href="<?= site_url('auth/logout') ?>">
									<i class="ti-power-off text-primary"></i>
									Logout
								</a>
							</a>
						</div>
					</div>
					<!-- <li class="nav-item nav-settings d-none d-lg-flex">
						<a class="nav-link" href="<?= site_url('admin') ?>">
							<i class="icon-ellipsis"></i>
						</a>
					</li> -->
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-toggle="offcanvas">
					<span class="icon-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			<div class="theme-setting-wrapper">
				<div id="settings-trigger"><i class="ti-settings"></i></div>
				<div id="theme-settings" class="settings-panel">
					<i class="settings-close ti-close"></i>
					<p class="settings-heading">SIDEBAR SKINS</p>
					<div class="sidebar-bg-options selected" id="sidebar-light-theme">
						<div class="img-ss rounded-circle bg-light border mr-3"></div>Light
					</div>
					<div class="sidebar-bg-options" id="sidebar-dark-theme">
						<div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
					</div>
					<p class="settings-heading mt-2">HEADER SKINS</p>
					<div class="color-tiles mx-0 px-4">
						<div class="tiles success"></div>
						<div class="tiles warning"></div>
						<div class="tiles danger"></div>
						<div class="tiles info"></div>
						<div class="tiles dark"></div>
						<div class="tiles default"></div>
					</div>
				</div>
			</div>
			<div id="right-sidebar" class="settings-panel">
				<i class="settings-close ti-close"></i>
				<ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
							aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
							aria-controls="chats-section">CHATS</a>
					</li>
				</ul>
				<div class="tab-content" id="setting-content">
					<div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
						aria-labelledby="todo-section">
						<div class="add-items d-flex px-3 mb-0">
							<form class="form w-100">
								<div class="form-group d-flex">
									<input type="text" class="form-control todo-list-input" placeholder="Add To-do">
									<button type="submit" class="add btn btn-primary todo-list-add-btn"
										id="add-task">Add</button>
								</div>
							</form>
						</div>
						<div class="list-wrapper px-3">
							<ul class="d-flex flex-column-reverse todo-list">
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Team review meeting at 3.00 PM
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Prepare for presentation
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Resolve all the low priority tickets due today
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Schedule meeting for next week
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Project review
										</label>
									</div>
									<i class="remove ti-close"></i>
								</li>
							</ul>
						</div>
						<h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
						<div class="events pt-4 px-3">
							<div class="wrapper d-flex mb-2">
								<i class="ti-control-record text-primary mr-2"></i>
								<span>Feb 11 2018</span>
							</div>
							<p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
							<p class="text-gray mb-0">The total number of sessions</p>
						</div>
						<div class="events pt-4 px-3">
							<div class="wrapper d-flex mb-2">
								<i class="ti-control-record text-primary mr-2"></i>
								<span>Feb 7 2018</span>
							</div>
							<p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
							<p class="text-gray mb-0 ">Call Sarah Graves</p>
						</div>
					</div>
					<!-- To do section tab ends -->
					<div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
						<div class="d-flex align-items-center justify-content-between border-bottom">
							<p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
							<small
								class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
								All</small>
						</div>
						<ul class="chat-list">
							<li class="list active">
								<div class="profile"><img src="<?= site_url('assets/skydash/') ?>images/faces/face1.jpg"
										alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Thomas Douglas</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">19 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?= site_url('assets/skydash/') ?>images/faces/face2.jpg"
										alt="image"><span class="offline"></span></div>
								<div class="info">
									<div class="wrapper d-flex">
										<p>Catherine</p>
									</div>
									<p>Away</p>
								</div>
								<div class="badge badge-success badge-pill my-auto mx-2">4</div>
								<small class="text-muted my-auto">23 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?= site_url('assets/skydash/') ?>images/faces/face3.jpg"
										alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Daniel Russell</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">14 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?= site_url('assets/skydash/') ?>images/faces/face4.jpg"
										alt="image"><span class="offline"></span></div>
								<div class="info">
									<p>James Richardson</p>
									<p>Away</p>
								</div>
								<small class="text-muted my-auto">2 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?= site_url('assets/skydash/') ?>images/faces/face5.jpg"
										alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Madeline Kennedy</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">5 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?= site_url('assets/skydash/') ?>images/faces/face6.jpg"
										alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Sarah Graves</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">47 min</small>
							</li>
						</ul>
					</div>
					<!-- chat tab ends -->
				</div>
			</div>
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<?php $menu = $this->uri->segment(2); ?>
					<li class="nav-item <?php if($menu=='home'){ echo "active"; } ?>">
						<a class="nav-link" data-toggle="collapse" href="<?= site_url('admin/home/') ?>"
							aria-expanded="false" aria-controls="ui-basic">
							<i class="ti ti-home mx-2"></i>
							<span class="menu-title">Dashboard</span>
						</a>
						<div class="collapse" id="ui-basic">
						</div>
					</li>
					<li class="nav-item <?php if($menu=='caraousel'){ echo "active"; } ?>">
						<a class="nav-link" data-toggle="collapse" href="<?= site_url('admin/caraousel/') ?>"
							aria-expanded="false" aria-controls="form-elements">
							<i class="ti ti-crown mx-2"></i>
							<span class="menu-title">Caraousel</span>
						</a>
					</li>
					<li class="nav-item <?php if($menu=='kategori'){ echo "active"; } ?>">
						<a class="nav-link" data-toggle="collapse" href="<?= site_url('admin/kategori/') ?>"
							aria-expanded="false" aria-controls="charts">
							<i class="icon-grid-2 mx-2"></i>
							<span class="menu-title">Kategori Konten</span>
						</a>
					</li>
					<li class="nav-item <?php if($menu=='konten'){ echo "active"; } ?>">
						<a class="nav-link" data-toggle="collapse" href="<?= site_url('admin/konten/') ?>"
							aria-expanded="false" aria-controls="charts">
							<i class="icon-columns mx-2"></i>
							<span class="menu-title">Konten</span>
						</a>
					</li>
					<?php if($this->session->userdata('level')=='Admin'){ ?>
					<li class="nav-item <?php if($menu=='user'){ echo "active"; } ?>">
						<a class="nav-link" data-toggle="collapse" href="<?= site_url('admin/user/') ?>"
							aria-expanded="false" aria-controls="tables">
							<i class="ti ti-user mx-2"></i>
							<span class="menu-title">User</span>
						</a>
					</li>
					<li class="nav-item <?php if($menu=='konfigurasi'){ echo "active"; } ?>">
						<a class="nav-link" data-toggle="collapse" href="<?= site_url('admin/konfigurasi/') ?>"
							aria-expanded="false" aria-controls="icons">
							<i class="ti ti-pencil mx-2"></i>
							<span class="menu-title">Konfigurasi</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-lg-12 col-md-12 grid-margin">
							<div class="row">
								<div class="col-12 col-xl-12 mb-4 mb-xl-0">
									<!-- Judul halaman Content -->
									<div class="container-xxl flex-grow-1 container-p-y">
										<?= $contents; ?>
									</div class>
									<!-- End Judul halaman Content -->
								</div>
							</div>
						</div>
						<!-- content-wrapper ends -->
						<!-- partial:partials/_footer.html -->

						<!-- partial -->
					</div>
					<!-- main-panel ends -->
				</div>
				<!-- page-body-wrapper ends -->
			</div>
		</div>
	</div>
	<!-- container-scroller -->

	<!-- plugins:js -->
	<script src="vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="vendors/chart.js/Chart.min.js"></script>
	<script src="vendors/datatables.net/jquery.dataTables.js"></script>
	<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<script src="<?= site_url('assets/skydash/') ?>js/dataTables.select.min.js"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= site_url('assets/skydash/') ?>js/off-canvas.js"></script>
	<script src="<?= site_url('assets/skydash/') ?>js/hoverable-collapse.js"></script>
	<script src="<?= site_url('assets/skydash/') ?>js/template.js"></script>
	<script src="<?= site_url('assets/skydash/') ?>js/settings.js"></script>
	<script src="<?= site_url('assets/skydash/') ?>js/todolist.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?= site_url('assets/skydash/') ?>js/dashboard.js"></script>
	<script src="<?= site_url('assets/skydash/') ?>js/Chart.roundedBarCharts.js"></script>
	<!-- End custom js for this page-->
	<script>
			$('#ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(1000);
	</script>
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
		});

	</script>
</body>

</html>
