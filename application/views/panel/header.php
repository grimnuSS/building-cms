<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?php echo base_url('panel/')?>img/logo/logo.png" rel="icon">
	<title>Azizoğulları İnşaat | Admin Panel</title>
	<link href="<?php echo base_url('/css/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/css/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/css/')?>ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">
	<!-- Sidebar -->
	<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
			<div class="sidebar-brand-icon">
				<img src="<?php echo base_url('/images/')?>logo.png">
			</div>
			<div class="sidebar-brand-text mx-3">Azizoğulları İnşaat</div>
		</a>
		<hr class="sidebar-divider my-0">
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo base_url("Panel/index")?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Anasayfa</span></a>
		</li>
		<hr class="sidebar-divider">
		<div class="sidebar-heading">
			Sayfa Düzenleri
		</div>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
			   aria-expanded="true" aria-controls="collapseBootstrap">
				<i class="far fa-fw fa-window-maximize"></i>
				<span>Hakkımızda</span>
			</a>
			<div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url("Hakkimizda/index")?>">Görüntüle</a>
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHizmet"
			   aria-expanded="true" aria-controls="collapseHizmet">
				<i class="fas fa-fw fa-table"></i>
				<span>Hizmetlerimiz</span>
			</a>
			<div id="collapseHizmet" class="collapse" aria-labelledby="headingHizmet" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url("hizmetlerimiz/index")?>">Görüntüle</a>
					<a class="collapse-item" href="<?php echo base_url("hizmetlerimiz/saveIndex")?>">Ekle</a>
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
			   aria-controls="collapseForm">
				<i class="fab fa-fw fa-wpforms"></i>
				<span>Projeler</span>
			</a>
			<div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Yeni Projeler</h6>
					<a class="collapse-item" href="<?php echo base_url("Yeniprojeler/index")?>">Görüntüle</a>
					<a class="collapse-item" href="<?php echo base_url("Yeniprojeler/saveIndex")?>">Ekle</a>
					<h6 class="collapse-header">Devam Eden Projeler</h6>
					<a class="collapse-item" href="<?php echo base_url("Devamedenprojeler/index")?>">Görüntüle</a>
					<a class="collapse-item" href="<?php echo base_url("Devamedenprojeler/saveIndex")?>">Ekle</a>
					<h6 class="collapse-header">Biten Projeler</h6>
					<a class="collapse-item" href="<?php echo base_url("Bitenprojeler/index")?>">Görüntüle</a>
					<a class="collapse-item" href="<?php echo base_url("Bitenprojeler/saveIndex")?>">Ekle</a>
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
			   aria-controls="collapseTable">
				<i class="fas fa-fw fa-table"></i>
				<span>İletişim</span>
			</a>
			<div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url("contacts")?>">Talepler</a>
				</div>
			</div>
		</li>
		<hr class="sidebar-divider">
		<div class="version" id="version-ruangadmin"></div>
	</ul>
	<!-- Sidebar -->
	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<!-- TopBar -->
			<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
				<button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>
				<ul class="navbar-nav ml-auto">
					<div class="topbar-divider d-none d-sm-block"></div>
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false">
							<img class="img-profile rounded-circle" src="<?php echo base_url('/images/')?>img/boy.png" style="max-width: 60px">
							<span class="ml-2 d-none d-lg-inline text-white small">Yönetici</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Çıkış Yap
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<!-- Topbar -->
