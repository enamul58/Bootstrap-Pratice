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
				<div class="col-md-4">
					<br/>
					<form>
						<!-- <fieldset disabled> -->
						<fieldset>
							<div class="form-group">
								<label for="inputName" class="control-label">Name</label>
								<input type="text" name="userName" id="inputName" class="form-control" placeholder="your full name">
							</div>
							<div class="form-group">
								<label for="selectGender" class="control-label">Gender</label>
								<select class="form-control" id="selectGender">
								 	<option>Select</option>
								 	<option>Male</option>
								 	<option>Female</option>
								 </select>
							</div>
							<div class="checkbox">
								<label>
								 	<input type="checkbox">
								 	 i agree	
								</label>
							</div>
							<button type="submit" class="btn btn-default">Login</button>
						</fieldset>
					</form>
				</div>
					<div class="col-md-8">
						<br/>
						<form class="form-horizontal">
							<div class="form-group">
								<label for="dispalyId" class="control-label col-md-2"> Id </label>
								<div class="col-md-10">
									<p class="form-control-static">101</p>
								</div>
							</div>
							<div class="form-group">
								<label for="firstName" class="control-label col-md-2">First Name</label>
								<div class="col-md-10">
									<input type="text" name="userName" id="firstName" class="form-control" placeholder="your first name" />
								</div>
							</div>
							<div class="form-group">
								<label for="lastName" class="control-label col-md-2">Last Name</label>
								<div class="col-md-10">
									<input type="text" name="userName" id="lastName" class="form-control" placeholder="your last name" />
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
</body>
</html>