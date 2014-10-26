<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>slant-cms</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cosmo/bootstrap.min.css">
	<link rel="stylesheet" href="css/slant.css">
</head>

<body>
	<header>
		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">slant-cms</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#categories">Categories</a></li>
						<li><a data-toggle="modal" data-target="#modalLogin" href="#login">Login</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					<h3>Hey, please enter your username and password!</h3>
					<form role="form">
						<input type="email" class="form-control" id="inputEmail" placeholder="Username">
						<input type="password" class="form-control" id="inputPassword" placeholder="Password">						
						<div class="checkbox"><label><input type="checkbox"> Remember me</label></div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div>
		  </div>
		</div>
	</header>