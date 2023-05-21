<!DOCTYPE html>
<html>
<head>
	<title>Ahmad Library</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Link CSS Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="#">Ahmad Library</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="daftarbuku">LIST OF BOOKS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="daftaranggota">LIST OF MEMBER</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="biodata">ABOUT ME</a>
				</li>
			</ul>
		</div>  
	</nav>
	<!-- End Navbar -->

	<div>
		@yield('content')
	</div>

	<!-- Link JS Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
