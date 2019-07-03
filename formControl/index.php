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
					<div class="form-group">
						<label for="inputName" class="contorl-label">Name</label>
						<input type="text" name="uesrName" class="form-control" id="inputName" placeholder="Full Name">
					</div>
					<div class="form-group">
						<label for="inputDOW" class="contorl-label">Date Of Work</label>
						<input type="date" name="userDOW" class="form-control" id="inputDOW" placeholder="Select Date of Work">
					</div>
					<div class="form-group">
						<label for="inputEmail" class="contorl-label">Email</label>
						<input type="email" name="userEmail" class="form-control" id="inputEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="inputNum" class="contorl-label">Work Experience</label>
						<input type="number" name="userNum" class="form-control" id="inputNum" placeholder="Enter Number">
					</div>
					<div class="form-group">
						<label for="inputURL" class="contorl-label">Presonal Website</label>
						<input type="url" name="userUrl" class="form-control" id="inputURL" placeholder="Your Web Address">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
					<br/>
					<br/>
					<select class="form-control">
						<option>select</option>
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
					</select>
				</div>
				<div class="col-md-4">
					<br>
					  <div class="form-group">
					   		<label class="contorl-label" for="inputDescription">Product Description</label>
					   		<textarea class="form-control" id="inputDescription" rows="5" placeholder="Full Product Description"></textarea>
					  </div>
					  <button type="submmit" class="btn btn-default">Login</button>
					  <br/>
					  <div class="checkbox">
					  	<label>
					  		<input type="checkbox" name="checkbox" value="option1">
					  		option 1
					  	</label> 
					  </div>
					  <div class="checkbox">
					  	<label>
					  		<input type="checkbox" name="checkbox" value="option2">
					  		option 2
					  	</label> 
					  </div>
					  <div class="checkbox">
					  	<label>
					  		<input type="checkbox" name="checkbox" value="option3">
					  		option 3
					  	</label> 
					  </div>
					  <div class="checkbox">
					  	<label>
					  		<input type="checkbox" name="checkbox" value="option4">
					  		option 4
					  	</label> 
					  </div>
					  <button type="button" class="btn btn-default">Login</button>
					  <br>
					  <br>
					  	<label class="checkbox-inline">
					  		<input type="checkbox" name="checkbox" value="option1">
					  		option 1
					  	</label>
					  	<label class="checkbox-inline">
					  		<input type="checkbox" name="checkbox" value="option1">
					  		option 2
					  	</label>
					  	<label class="checkbox-inline">
					  		<input type="checkbox" name="checkbox" value="option1">
					  		option 3
					  	</label>
					  	<label class="checkbox-disabled">
					  		<input disabled type="checkbox" name="checkbox" value="option1">
					  		option 4
					  	</label>
					  	<br>
					  	<div class="radio">
					  		<label>
					  			<input type="radio" name="radioGroup" value="1"> radio 1
					  		</label>
					  	</div>
					  	<div class="radio">
					  		<label>
					  			<input type="radio" name="radioGroup" value="2"> radio 2
					  		</label>
					  	</div>
					  	<div class="radio">
					  		<label>
					  			<input type="radio" name="radioGroup" value="3"> radio 3
					  		</label>
					  	</div>
					  	<div class="radio">
					  		<label>
					  			<input type="radio" name="radioGroup" value="4"> radio 4
					  		</label>
					  	</div>
					  		<label class="radio-inline">
					  			<input type="radio" name="radioGroup" value="1"> radio 1
					  		</label>
					  		<label class="radio-inline">
					  			<input type="radio" name="radioGroup" value="2"> radio 2
					  		</label>
					  	
					  		<label class="radio-inline">
					  			<input type="radio" name="radioGroup" value="3"> radio 3
					  		</label>
				</div>
			</div>
		</div>
</body>
</html>