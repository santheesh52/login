<?php 
include('dbconfig.php');
// Get request data 
$FULLNAME = $_POST['FullName'];
$Phone = $_POST['Phone'];
$AGE = $_POST['Age'];
$DOB = $_POST['DOB']; // Corrected the case of 'DOB'
$ADDRESS = $_POST['Address'];

if($DOB == '')
{
    $query = "UPDATE userdetails SET name = '$FULLNAME', phone='$Phone', AGE='$Age', GENDER='MALE', DOB='NULL', ADDRESS='$ADDRESS' WHERE emailid = 'test@gmail.com'"; 
}
else
{
    $query = "UPDATE userdetails SET name = '$FULLNAME', phone='$Phone',AGE='$Age' GENDER='MALE', DOB='$DOB', ADDRESS='$ADDRESS' WHERE emailid = 'test@gmail.com'"; 
}

$result = mysqli_query($dbc, $query);

if($result)
{
    // Send response for update successfully
    
    $response = ['status' => 'success'];
    echo json_encode($response);
}
else
{
    // send response for found unexpected error

    $response = ['status' => 'failed', 'error' => mysqli_error($dbc)]; // Corrected the variable name
    echo json_encode($response);
}
?>
