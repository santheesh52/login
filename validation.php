<?php 

include('dbconfig.php');

// Get Request data.......

$EMAIL = $_POST['emailid'];

$PASSWORD = $_POST['password'];



// Checking.........

$query = "SELECT USER_ID,emailid,password FROM userdetails WHERE emailid = '$EMAIL' && password = '$PASSWORD'";

$result = mysqli_query($dbc,$query);

if($result)
{
     $num = mysqli_num_rows($result);

     if($num == 1)
     {
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        session_start();
        $_SESSION["USERID"] = $row["USER_ID"];  

        
        $response = ['status' => 'success'];
        echo json_encode($response);
     }
     else
     {
        $response = ['status' => 'Invalid'];
        echo json_encode($response);
     }
}

else
{
    $response = ['status' => 'Error','Error' => mysqli_error($conn)];
    echo json_encode($response);
}

?>