<?php 
session_start();      
	include("connect.php");			
        
    if (isset($_SESSION["Username"])){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <?php }else{
        
	Header("Location: signin.php"); 
    }