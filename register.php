<?php
	require("dbconfig.php");
	if(isset($_POST['register']))
	{
		$mailid = $_POST['mailid'];
		$userid = $_POST['userid'];
		$pass = $_POST['pass'];
		$pass1 = $_POST['pass1'];
		if($pass != $pass1)
    	{
			echo "<script type='text/javascript'>alert('Password doesn\'t match');</script>";
		}
		else
		{
			$query1 = "INSERT INTO `userdetails`(`emailid`, `name`, `password`,`pass1`) VALUES ('".$mailid."','".$userid."','".$pass.",'".$pass1.")";
			$result1=mysqli_query($dbc,$query1);
			if($result1)
			{
				header('location:index.php');
				
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error in inserting user details');</script>";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->

        <div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9"><br><br></div>

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->

                        <div class="row">

                            <div class="col-lg-6 d-none d-lg-block">
								<span><img src="img/logo.jpg" alt="logo" width="480" height="500"></span>
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
									<!--<h1 class="h4 text-gray-900 mb-4">Register here !!!</h1>-->
										<h1 class="h4  mb-4"><b>Register here !!!</b></h1>
									</div>
								<form class="user" action="#" method="POST">
									<div class="form-group">
										<input type="email" class="form-control form-control-user" id="mailid" name="mailid"
											placeholder="Enter mailid" onblur="validateEmail(this)"; autocomplete="on" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="userid" name="userid"
											placeholder="Enter username" autocomplete="on" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="pass" name="pass"
											placeholder="Enter password" autocomplete="on" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="pass1" name="pass1"
											placeholder="Enter confirm password" autocomplete="on" required>
									</div>
									<div id="msg"></div>				
									<button type="submit" class="btn btn-primary btn-user btn-block" name="register" id="register" >Register</button>
								</form>
								<div class="text-center">
									<a class="small" href="index.php">Already have an account? Login!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

	<script>
		function validateEmail(obj){
			var email = obj.value;
			if(email != ''){
			$.ajax({

			url:'ajax.php',

			type:'POST',

			data:'email='+email,

			success:function(data){
			var out=data.split(",")

			if(out[0] == 'error'){
			$('#msg').html(out[1]);
			$('#register').attr('disabled',true);
			}
			else{
				$('#register').attr('disabled',false);	
			}

			}

			});
			}
		}

	</script>

</body>

</html>