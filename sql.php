<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$con = mysqli_connect("localhost", "Abdullahi", "", "abdullahi");

if ($con===false)
{
    die("Error: Could not Connect".mysqli_connect_error() 
);
    }

$name = $_REQUEST['name'];
$email = $_REQUEST['email']; 
$message = $_REQUEST['$message']

$sql = "INSERT INTO abdullahi VALUES( '$name' ,$email','$message')";

if(mysqli_query($con,$sql)){
    echo "Added Succesfully";
    echo nl2br( "\n$name\n $email $message");
}
else{
    echo"Error in Sql". mysqli_error($con);
}

mysqli_close($con);
?>
</body>
</html>