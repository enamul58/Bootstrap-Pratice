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

					<form class="form-horizontal">
						<div class="form-group has-success has-feedback">
							<label for="inputPassword" class="control-label col-md-2">Password</label>
							<div class="col-md-6">
								<input type="Password" name="userPassword" class="form-control" placeholder="Your password">
								<span class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span class="help-block">Stronp Password</span>
							</div>
						</div>
						<div class="form-group has-warning has-feedback">
							<label for="inputPassword" class="control-label col-md-2">Password</label>
							<div class="col-md-6">
								<input type="password" name="userPassword" class="form-control" placeholder="Your Password">
								<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
								<span class="help-block">Weak Password</span>
							</div>
						</div>
						<div class="form-group has-error has-feedback">
							<label for="inputAge" class="control-label col-md-2">Age</label>
							<div class="col-md-6">
								<input type="number" name="numAge" id="inputAge" class="form-control" placeholder="Your Age">
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span class="help-block">Invalid Age</span>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-12">
					<form class="form-horizontal">
						<div class="form-group has-success has-feedback">
							<label for="inputPassword" class="control-label col-md-2">Income</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="Password" name="userPassword" class="form-control" placeholder="Your Annual Income">
								</div>
								
								<span class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span class="help-block">Success</span>
							</div>
						</div>
						<div class="form-group has-warning has-feedback">
							<label for="inputPassword" class="control-label col-md-2">Income</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="password" name="userPassword" class="form-control" placeholder="Your Annual Income">
								</div>
								
								<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
								<span class="help-block">Warning</span>
							</div>
						</div>
						<div class="form-group has-error has-feedback">
							<label for="inputAge" class="control-label col-md-2">Income</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="number" name="numAge" id="inputAge" class="form-control" placeholder="Your Annal income">
								</div>
								
								<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								<span class="help-block">Invalid Age</span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>