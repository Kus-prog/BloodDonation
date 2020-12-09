<!DOCTYPE html>

	<head>
		<title>Donate The Blood</title>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donation Website">
        <meta name="author" content="Exceptional Programmers">
        


		<!-- Bootstrap Link CSS Files -->
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">


<?php 

	include 'navigation.php'; 
	

?>


<style>
	*{
		margin:0.5px;
		padding:0px;
	}
	h1,h3{
		display: inline-block;
		padding: 10px;
		position:center;
	}
	body{
		background-color:grey;
	}

</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will not be able to show before 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
								<h3>Welcome </h3> <h1>User Name</h1>
							</div>
							<p class="text-center">Here you can manage your account update your profile</p>
							<button style="margin-top: 20px;margin-left:450px;" name="date" id="save_the_life" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
							<div class="test-success text-center" id="data" style="margin-top: 20px;"><!-- Display Message here--></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
