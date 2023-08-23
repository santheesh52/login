<?php
include('dbconfig.php');

$query = "SELECT * FROM userdetails WHERE emailid = 'test@gmail.com'";

$result = mysqli_query($dbc,$query);

if($result)
{

   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $EMAIL = $row["emailid"];
   $NAME = $row["name"];
}
else
{
    echo "<script> alert('Unexpected Error'); </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/profile.css">

</head>
<body>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<div class="card-body">
<div class="account-settings">
<div class="user-profile">
<div class="user-avatar">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin" >
<h5 class="user-name">Santheesh</h5>
<div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
<div class="btn btn-primary btn-rounded" id="img">
<label class="form-label text-white m-1" for="customFile2">Upload your image</label>
<input type="file" class="form-control d-none" id="customFile2" name="uploadfile" value="" />
</div>
</div>
</div>
<div class="about">
<h5>About</h5>
<p>I'm Sandy. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<div class="card-body">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<h6 class="mb-2 text-primary">Personal Details</h6>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="fullName">Full Name</label>
<input type="text" class="form-control" name="FullName" placeholder="Enter full name" autocomplete="off">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="eMail">Email</label>
<input type="email" class="form-control" id="eMail" placeholder="Enter email ID" autocomplete="off" disabled value="<?php echo $EMAIL; ?>">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" class="form-control" name="Phone" id="phone" placeholder="Enter phone number" autocomplete="off">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="phone">Age</label>
<input type="text" class="form-control" name="Age" id="Age" placeholder="Enter phone age" autocomplete="off" >
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="website">Date Of birth</label>
<input type="date" class="form-control" name="DOB" id="DOB" placeholder="mm/dd/yyyy">
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
<div class="form-group">
<label for="phone">Address</label>
<input type="text" class="form-control" name="Address" id="Address" placeholder="Enter  address" >
</div>
</div>
</div>

<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><br><br>
<div class="text-right">
<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
<button type="button" id="submit" name="submit" class="btn btn-primary" onclick="Update()">Update</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script type="text/javascript">
</script> -->
 <script>
    function Update(){
        var FullName = $("input[name=FullName]").val();
        var Phone = $("input[name=Phone]").val();
        var Age = $("input[name=Age]").val();
        var Dob = $("input[name=DOB]").val();
        var Address = $("input[name=Address]").val();

        var user_info = {
            FullName : FullName,
            Phone:Phone,
            Age:Age,
            Dob:Dob,
            Address:Address
        }
        console.log(user_info)
        $.ajax({
                type: "POST",
                url: 'update.php',
                data: user_info,
                dataType: 'json',
                success: function(response)
                {
                    var response = JSON.parse(response);
                    if(response)
                    {
                        console.log("Response"+response.status);

                        if(response.status == 'success')
                        {
                                alert('The Record has been Updated.....');
                                location.reload();
                                
                        }
                        else if(response.status == 'failed')
                        {
                                alert(response.error);
                        }
                    }
                    else
                    {
                        console.log('Error');
                    }
                }
        });
    }
</script> 
</body>
</html>