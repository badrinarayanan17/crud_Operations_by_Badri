<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Record</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<?php

include "authentication.php";

if(isset($_POST['subm'])){
    $Name=$_POST['Name'];
    $Age=$_POST['Age'];
    $Email=$_POST['Email'];
    $Contact=$_POST['Contact'];
    $State=$_POST['State'];
    $sql="insert into data (Name,Age,Email,Contact,State) values('$Name',$Age,'$Email','$Contact','$State')";
	if (mysqli_query($con, $sql)) {
        
        echo "<script>alert('Data Inserted Successfully')</script>";
		// header("Location:index.php");
		
        
     } else {
        echo "Error: " . $sql . " " . mysqli_error($con);
     }
     mysqli_close($con);
  }



?>
<style>
    body{
        background-color: #FFFDE3;
    }
    .main{
        background-color:#4E6C50;
        width:600px;
        padding-top: 3px;
        height:310px;
        margin-top:100px;
        margin-left:350px;
        border-radius:7px;
        font-family:Ubuntu;
        color:white;
        
    }
    .details{
        margin-left:30%;
        margin-top:30px;
    }
    .submit{
        margin-left:105px;
        cursor:pointer;
        padding-top:8px;
        padding-bottom:8px;
        padding-left:15px;
        padding-right:15px;
        background-color:#DC5F00;
        border:none;
        font-family:Ubuntu;
        border-radius:10px;
        color:white;
        transition:0.15s;
    }
    .submit:hover{
        background-color:#F57328;
    }
   .name{
    margin-left:4%;
    border-radius: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-style: solid;
   }
   .email{
    margin-left:4%;
    border-radius: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-style: solid;
   }
   .age{
    margin-left:7%;
    border-radius: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-style: solid;
   }
   .contact{
    margin-left:0px;
    border-radius: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-style: solid;
   }
   .state{
    margin-left:4%;
    border-radius: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-style: solid;
   }
   .title{
    font-family:Ubuntu;
    text-align:center;
    margin-top:3%;
    font-size: 35px;
   }

</style>

<body>
    <p class="title">FILL THE BELOW FIELDS</p>
    <div class="main">
        <div class="details">
    <form action="creation.php" method="POST">
    <label>Name</label>
    <input type="text" class="name" name="Name">
    <br><br>
    <label>Age</label>
    <input type="text" class="age" name="Age">
    <br><br>
    <label>Email</label>
    <input type="text" class="email" name="Email">
    <br><br>
    <label>Contact</label>
    <input type="text" class="contact" name="Contact">
    <br><br>
    <label>State</label>
    <input type="text" class="state" name="State">
    <br><br>
    <input type="Submit" name="subm" class="submit">
    </form>
    </div>
    </div>
</body>
</html>