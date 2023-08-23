<?php
	require("dbconfig.php");

	if(isset($_POST['email']))
	{
		$mail   = $_POST['email'];
		$query  = "SELECT * FROM `userdetails` WHERE `emailid`='".$mail."'";
		$result = mysqli_query($dbc,$query);
		if(mysqli_num_rows($result))
    	{
			echo "error,<i style='color:red'>MailID already exist !!!</i>";
		}
		else
		{
			echo "success,<i style='color:green'>UserID doesn't exist !!!</i>";
		}
	}
	
?>