<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="<?= base_url('assets/blogy/'); ?>favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="<?= base_url('assets/blogy/'); ?>https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap"
		rel="stylesheet">


	<link rel="stylesheet" href="<?= base_url('assets/blogy/'); ?>fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/blogy/'); ?>fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet"
		href="<?= base_url('assets/blogy/'); ?>https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="<?= base_url('assets/blogy/'); ?>css/tiny-slider.css">
	<link rel="stylesheet" href="<?= base_url('assets/blogy/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url('assets/blogy/'); ?>css/glightbox.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/blogy/'); ?>css/style.css">

	<link rel="stylesheet" href="<?= base_url('assets/blogy/'); ?>css/flatpickr.min.css">


	<title><?= $judul; ?></title>
</head>

<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start"><?= $konfig->judul_website; ?></span></a>
						</div>
						<div class="col-8 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li> <a href="<?= base_url() ?>">Home</a></li>
								<?php foreach ($kategori as $kate){ ?>
								<li>
									<a
										href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
									<?php } ?>
								</li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#"
								class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
								<a href="<?= base_url('auth') ?>"
									class="btn btn-primary rounded-pill py-2 px-2">Login</a>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Detail Start -->
	<div class="container py-5">
		<div class="row pt-5">
			<div class="col-lg-12">
				<div class="d-flex flex-column text-center mb-3">
					<p class="section-title pr-5">
						<span class="pr-2">Blog Detail Page</span>
					</p>
					<h1 class="mb-3"><?= $konten->judul; ?></h1>
					<div class="d-flex flex-column text-center mb-3">
						<p class="mr-3"><i class="icon icon-user text-primary"></i> <?= $konten->nama; ?></p>
						<p class="mr-3"><i class="icon icon-folder text-primary"></i> <?= $konten->nama_kategori; ?>
						</p>
					</div>
				</div>
				<div class="mb-5">
					<img class="img-fluid rounded w-100 mb-4"
						src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" />
					<?= $konten->keterangan; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Detail End -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4"><?= $konfig->judul_website; ?></h3>
						<p><?= $konfig->profil_website; ?></p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social Media</h3>
						<ul class="list-unstyled social">
							<li><a href="<?= $konfig->instagram; ?>"><span class="icon-instagram"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->

				<div class="col-lg-3 col-md-3">
					<h4 class="text-white mb-4">Contact Us</h4>
					<p class="mb-2"><i class="icon icon-map-marker me-2"></i><?= $konfig->alamat; ?></p>
					<p class="mb-2"><i class="icon icon-phone me-2"></i><?= $konfig->no_wa; ?></p>
					<p class="mb-2"><i class="icon icon-envelope me-2"></i><?= $konfig->email; ?></p>
				</div>
				<div class="col-lg-2 col-md-3">
					<h5 class="text-white mb-3">Quick Links</h5>
					<a class="btn btn-link" href="<?= base_url() ?>">Home</a>
					<?php foreach ($kategori as $kate){ ?>
					<a class="btn btn-link" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
						<?= $kate['nama_kategori'] ?>
					</a>
					<?php } ?>
				</div>

			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
					<!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

					<p><?= $konfig->judul_website; ?>

						</script>. All Rights Reserved.</a>
						<!-- License information: https://untree.co/license/ -->
					</p>
				</div>
			</div>
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>


	<script src="<?= base_url('assets/blogy/'); ?>js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/blogy/'); ?>js/tiny-slider.js"></script>

	<script src="<?= base_url('assets/blogy/'); ?>js/flatpickr.min.js"></script>


	<script src="<?= base_url('assets/blogy/'); ?>js/aos.js"></script>
	<script src="<?= base_url('assets/blogy/'); ?>js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/blogy/'); ?>js/navbar.js"></script>
	<script src="<?= base_url('assets/blogy/'); ?>js/counter.js"></script>
	<script src="<?= base_url('assets/blogy/'); ?>js/custom.js"></script>


</body>

</html>
