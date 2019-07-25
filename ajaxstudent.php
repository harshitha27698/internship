<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    	#my-container{
    		max-width: 600px;
    		box-shadow: 1px 1px 6px 2px #ccc;
    		margin: auto;
    		padding: 20px;
    	}
    </style>
</head>
<body>

<div id="my-container">
	<div id="div1" class="alert alert-success"></div>
	<form>
		<div class="form-group">
			<label for="Name">Name</label>
			<input type="text" class="form-control" name="name" id="Name" placeholder="Enter your name">
		</div>
		<div class="form-group">
			<label for="email">email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
		</div>
		<div class="form-group">
			<label for="address">address</label>
			
			<textarea class="form-control" name="address" id="address" placeholder="Enter your address"></textarea>
		</div>
		<div class="form-group">
			<label for="branch">branch</label>
			<select name="branch" class="form-control" id="branch">
				<option>Select ur branch</option>
				<option>CSE</option>
				<option>ISE</option>
				<option>ECE</option>
				<option>EEE</option>
				<option>ME</option>
			</select>
		</div>
		<input type="button" id="submit" name="submit" class="btn btn-primary" value="Register">
	</form>
	
</div>
<script type="text/javascript">
	$(function(){
		$('#div1').hide()
		$('#submit').click(function(){
			var name=$('#Name').val();
			var email=$('#email').val();
			var address=$('#address').val();
			var branch=$('#branch').val();
			$.ajax({
				url:"studentInsert.php",
				data:{
					name:name,
					email:email,
					address:address,
					branch:branch
				},
				type:'post',
				success:function(res){
					$('#div1').show()
					$('#div1').html(res)
				},
				error:function(res){
					alert(res)
				}
			})
		})
	})
</script>

</body>
</html>