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
				<div class="col-md-12">
					<br/>
						<div class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle">
								Dropdown
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">action 1</a></li>
								<li><a href="#">action 2</a></li>
								<li><a href="#">action 3</a></li>
							</ul>
						</div>
						<br>
						<div class="dropdown">
							<button  data-toggle="dropdown" class="dropdown-toggle btn btn-primary">
								Dropdown
								<span class="caret"></span>
							</button>
							<div class="dropdown-menu">
								<li class="dropdown-header"><strong>Header 1</strong></li>
								<li><a href="#">action 1</a></li>
								<li class="disabled"><a href="#">action 2</a></li>
								<li><a href="#">action 3</a></li>
								<li class="divider"></li>
								<li class="dropdown-header"><strong>Header 2</strong></li>
								<li><a href="#">action 1</a></li>
								<li class="disabled"><a href="#">action 2</a></li>
								<li><a href="#">action 3</a></li>
							</div>
						</div>
				</div>
			</div>
		</div>
</body>
</html>