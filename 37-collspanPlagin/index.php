<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script src="inc/jquery.min.js"></script> 
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css">

<script type="text/javascript">
	$(document).ready( function(){
		$('#toggleButton').click( function(){
			$('#imageGallery').collapse('toggle');
		});
		$('#hideButton').click( function(){
			$('#imageGallery').collapse('hide');
		});
		$('#showButton').click( function(){
			$('#imageGallery').collapse('show');
		});

		$('#imageGallery').on('show.bs.collapse',function (){
			alert('image Gallery is about expanded')
		});
		$('#imageGallery').on('shown.bs.collapse',function (){
			alert('image Gallery expanded')
		});
		$('#imageGallery').on('hide.bs.collapse',function (){
			alert('image Gallery is about hidden')
		});
		$('#imageGallery').on('hidden.bs.collapse',function (){
			alert('image Gallery hidden')
		});
	});
</script>


</head>
<body>
		<div class="container">
			<div class="row">
				<br>

				<div class="panel panel-default">
					<div class="panel-heading">
						<button class="btn btn-primary" id="toggleButton">
							Toggle Image Gallay
						</button>
						<button class="btn btn-primary" id="hideButton">
							 Hide Image Gallay
						</button>
						<button class="btn btn-primary" id="showButton">
							 Show Image Gallay
						</button>
					</div>
					<div class="panel-body collapse"  id="imageGallery">
						<div class="col-md-4">
					<a href="img/download.jpg" class="thumbnail">
						<p>Bird</p>
						<img src="img/download.jpg">
					</a>
				</div>
				<div class="col-md-4">
					<a href="img/small-red-apple-hi.png" class="thumbnail">
						<p>Apple</p>
						<img src="img/small-red-apple-hi.png">
					</a>
				</div>
				<div class="col-md-4">
					<a href="img/unnamed.jpg" class="thumbnail">
						<p>Google</p>
						<img src="img/unnamed.jpg">
					</a>
				</div>
					</div>
				</div>

				
			</div>	
		</div>
</body>
</html>