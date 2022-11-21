<?php
        include "authentication.php";
        $sql = "select * from data";
        $result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read/Update/Delete</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<style>

    .main{
        border:3px;
        background-color: #9CFF2E;
        font-family: Ubuntu;
        margin-left:9%;
        margin-top: 5%;
        cursor: pointer;
        text-align: center;
        border-radius: 10px;
        width: 80%;
       
    }
    table,th,td{
        padding: 20px;
        border-collapse: collapse ;
        /* border: 1px solid white; */
       
    }
    .btn{
        padding-top: 8px;
        padding-bottom: 8px;
        padding-left: 14px;
        padding-right: 14px;
        background-color: black;
        color: white;
        margin-top: 4%;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        margin-left: 20%;
    }
    .btn:hover{
        background-color: #3C4048;

    }
    .btn2:hover{
        background-color: #3C4048;

    }

    .btn2{
        padding-top: 8px;
        padding-bottom: 8px;
        border-radius: 10px;
        margin-top: 4%;
        padding-left: 14px;
        padding-right: 14px;
        background-color: black;
        color: white;
        margin-left: 20%;
        border:none;
    }
    
    .title{
        font-family: Ubuntu;
        margin-left: 37%;
        font-size: 35px;
        
    }
    tr:nth-child(odd){
        background-color: #9CFF2E;
        border: 1px solid white;
    }
    tr:nth-child(even){
        background-color: white;
        border: none;
    }
    body{
        background-color: #FFFDE3;
    }
    

</style>
<body>
    
    <table class="main" >
        <p class="title">READ / UPDATE / DELETE</p>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Contact</th>
            <th>State</th>
            <th colspan="2">Modifications</th>
            
        </tr>
        <?php

        if($result->num_rows>0){

            while($row = $result->fetch_assoc()){

        ?>
            <tr> 
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Age'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Contact'];?></td>
                <td><?php echo $row['State'];?></td>
                <td><a href="update.php?id=<?php echo $row["id"];?>"<button class="btn" >Edit</button>
                <td><a  href="delete.php?id=<?php echo $row["id"];?>"<button class="btn2">Delete</button></a>
            </tr>
            
      <?php

            }
        }
      ?>
  
      
    </table>
</body>
</html>

