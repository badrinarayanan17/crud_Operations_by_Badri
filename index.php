<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

<style>
    .main{
        background-color: #FFE9A0;
        border-style: solid;
        border:none;
        border-width: 1px;
        height: 300px;
        width: 600px;
        margin-left: 385px;
        font-family: Ubuntu;
        border-radius: 6px;
        margin-top: 150px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }
    .title{
        text-align: center;
        font-size: 35px;
        margin-top: 18px;
        margin-bottom: 0;
    
       
    }
    .btn{
        padding-top:10px;
        padding-bottom: 10px;
        padding-left: 60px;
        padding-right: 60px;
        margin-left: 180px;
        margin-top: 80px;
        border-radius: 4px;
        cursor: pointer;
        background-color: #1C6758;
        font-family: Ubuntu;
        border: none;
        color:white;
       
        
    }
    .btn:hover{
        background-color: #7FB77E;
    }
    .btn2{

        padding-top:10px;
        padding-bottom: 10px;
        padding-left: 40px;
        padding-right: 40px;
        background-color: #1C6758;
        margin-left: 180px;
        margin-top: 50px;
        font-family: Ubuntu;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        color:white;
        transition: 0.15s;
    }
    .btn2:hover{
        background-color: #7FB77E;
        
    }
    .nav{
        color: white;
        text-decoration: none;
    }
    .nav:hover{
        color: black;
    }
    body{
        background-color: #FFFDE3;
    }
    .content{
        margin-top: 30px;
    
    }
  
</style>
</head>
<?php
if(isset($_POST['create']))
 header("Location:creation.php");
?>
<?php
if(isset($_POST['read']))
 header("Location:read.php");
?>
<body>
    <form action="index.php" method="POST">
    <div class="main">
        <div class="content">

           <p class="title">CRUD OPERATIONS</p>
       
        <button class="btn" name="create">CREATE A RECORD</button></a>

        <button class="btn2" name="read">READ / UPDATE / DELETE</button></a>
    </div>
    </div>
    </form>
    
</body>
</html>