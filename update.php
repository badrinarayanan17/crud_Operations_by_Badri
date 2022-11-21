<?php 
include "authentication.php";
if (isset($_POST['update'])) {
$id = $_POST['id'];
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$State = $_POST['State'];
$sql = "UPDATE `data` SET `Name`='$Name',`Age`='$Age',`Email`='$Email' ,`Contact`='$Contact', `State`='$State' WHERE `id`='$id'"; 
$result = $con->query($sql); 
if ($result == TRUE) {
	echo "<script>alert('Data Updated Successfully')</script>";
}
else{
echo "Error:" . $sql . "<br>" . $con->error;
}
} 
if (isset($_GET['id'])) {
$id = $_GET['id']; 
$sql = "SELECT * FROM `data` WHERE `id`='$id'";
$result = $con->query($sql); 
if ($result->num_rows > 0) {        
while ($row = $result->fetch_assoc()) {
$Name = $row['Name'];
$Age = $row['Age'];
$Email = $row['Email'];
$Contact = $row['Contact'];
$State = $row['State'];
$id = $row['id'];
} 
?>
<html>
<style>
	.main{
        background-color:#4E6C50;
        width:600px;
        padding-top: 3px;
        height:310px;
        margin-top:100px;
        margin-left:80px;
        border-radius:7px;
        font-family:Ubuntu;
        color:white;
        
    }
    .details{
        margin-left:2%;
        margin-top:30px;
    }
    .submit{
        margin-left:5px;
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
    margin-left:1%;
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
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<p class="title">UPDATE DETAILS</p>
		<form action="" method="post">
		<center>
		<div class="main">
        <div class="details">
    <form action="creation.php" method="POST">
    <label>Name</label>
    <input type="text" class="name" name="Name" value="<?php echo $Name; ?>">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
    <br><br>
    <label>Age</label>
    <input type="text" class="age" name="Age" value="<?php echo $Age; ?>">
    <br><br>
    <label>Email</label>
    <input type="text" class="email" name="Email" value="<?php echo $Email; ?>">
    <br><br>
    <label>Contact</label>
    <input type="text" class="contact" name="Contact" value="<?php echo $Contact; ?>">
    <br><br>
    <label>State</label>
    <input type="text" class="state" name="State" value="<?php echo $State; ?>">
    <br><br>
	<input type="submit" value="Update" name="update" class="submit">
    </form>
    </div>
    </div>
<!-- 			
		Name:<input type=text name=Name value="<?php echo $Name; ?>"><br><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		Age:<input type=text name=Age value="<?php echo $Age; ?>"><br><br>
		Email:<input type=text name=Email value="<?php echo $Email; ?>"><br><br>
        Contact:<input type=text name=Contact value="<?php echo $Contact; ?>"><br><br>
        State:<input type=text name=State value="<?php echo $State; ?>"><br><br>
		<input type="submit" value="Update" name="update"> -->
		</center>
        </form> 
		</body>
		</html> 
<?php
} else{ 
header('Location: read.php');
} 
}
?>