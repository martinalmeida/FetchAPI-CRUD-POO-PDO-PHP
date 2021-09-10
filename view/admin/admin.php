<?php
include_once '../crud/insertar_modal.php';
include_once '../crud/editar_modal.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../../assets/img/icons/icon-48x48.png" />

	<title>API REST</title>

	<link href="../../assets/css/app.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand text-decoration-none" href="admin.php">
					<span class="align-middle">AdminKit</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="admin.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
						</a>
					</li>


			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link  d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="../../assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">User</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout">Log out</button>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div id="deletealert"></div>
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Table</strong> Dashboard</h1>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insert">
						Insert
					</button>

					<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="table-responsive" style="width:100%">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Password</th>
											<th scope="col">User</th>
											<th scope="col" class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody id="tabla">

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-body">
					<a>Are you sure?</a>
					<a type="button" class="btn btn-primary" href="../../model/login/logout.php">logout</a>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>

	<script src="../../assets/js/app.js"></script>
	<script src="../../assets/js/fetch/tabla.js"></script>
	<script src="../../assets/js/fetch/insert.js"></script>
	<script src="../../assets/js/fetch/delete.js"></script>
	<script src="../../assets/js/fetch/update.js"></script>
	<script src="../../assets/js/fetch/update_post.js"></script>

</body>

</html>