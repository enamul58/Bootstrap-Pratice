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
					<br>
					<div class="btn btn-primary btn-sm pull-right" data-target="#logInModal" data-toggle="modal">Login</div>
					<div class="modal" id="logInModal" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"> Login </h4>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="inputUserName">Username</label>
											<input type="text" name="Username" id="inputUserName" class="form-control" placeholder="login Username">
										</div>
										<div class="form-group">
											<label for="inputPassword">Password</label>
											<input type="password" name="password" id="inputPassword" class="form-control" placeholder="login Password">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button class="btn btn-primary">Login</button>
									<button class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>