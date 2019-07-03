<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script src="inc/jquery.min.js"></script> 
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>

</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<br>
					<div class="nav nav-tabs">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">About</a></li>
					</div>
				</div>
			<!-- nav-pills -->
			<div class="col-md-6">
					<br>
					<div class="nav nav-pills">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">About</a></li>
					</div>
			</div>
		</div>
		<!-- glyphicon with tab -->
		<div class="row">
			<div class="col-md-6">
				<br>
				<div class="nav nav-tabs">
					<li class="active">
						<a href="#">
							<span class="glyphicon glyphicon-home"></span>Home
						</a>
					</li>
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-earphone"></span>Contact
						</a>
					</li>
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-info-sign"></span>About
						</a>
					</li>
				</div>
			</div>
			<!-- glyphicon with pills -->
			<div class="col-md-6">
				<br>
				<div class="nav nav-pills">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
				</div>
			</div>
		</div>
		<!-- new row -->
		<div class="row">
			<div class="col-md-6">
				<br>
				<div class="nav nav-tabs nav-stacked">
					<li class="active"><a href=""><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href=""><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
					<li><a href=""><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
				</div>
			</div>
			<div class="col-md-6">
				<br>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href=""><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href=""><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
					<li><a href=""><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
				</div>
			</div>
		</div>
		<!-- new row -->
		<div class="row">
			<div class="col-md-6">
				<br>
				<div class="nav nav-tabs nav-justified">
					<li class="active"><a href=""><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href=""><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
					<li><a href=""><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
				</div>
			</div>
			<div class="col-md-6">
				<br>
				<div class="nav nav-pills nav-justified">
					<li class="active"><a href=""><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li class="disabled"><a href="http://google.com"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
					<li><a href=""><span class="glyphicon glyphicon-info-sign"></span>About</a></li>
				</div>
			</div>
		</div>
		<!-- new row -->
		<div class="row">
			<div class="col-md-6">
				<br>
				<div class="nav nav-pills nav-justified">
					<li class="active"><a href=""><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li class="disabled"><a href="http://google.com"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-info-sign"></span>About
							<span class="caret"></span>
							<ul class="dropdown-menu">
								<li><a href="#">Action 1</a></li>
								<li><a href="#">Action 2</a></li>
								<li><a href="#">Action 3</a></li>
							</ul>
						</a>
					</li>
				</div>
			</div>
		</div>
	</div>
</body>
</html>