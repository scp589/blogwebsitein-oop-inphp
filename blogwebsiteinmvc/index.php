<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sunny.css">
    <title>bogwebsite</title>
</head>
<body>
<?php
// author sunny pundhir
$controller = "mainclass"; //here defining the default value of controller
$function = "home"; // here defining the default value of function
if(isset($_GET['class']) && $_GET['class']!=""){//here the checking the get request value of conroller
    $controller = $_GET['class'];
}
if(isset($_GET['page']) && $_GET['page']!=""){ //here the checking of get request value of page
    $function = $_GET['page'];
}
if(file_exists('controller/'.$controller.'.php')){ // checking the file exists or not
include 'controller/'.$controller.'.php'; // here include the controller file 
}
else{
    die("file does not exists");
}
$class = $controller; //geting the controller class name in a veriable
$obj = new $class(); // making the class of controller class
if(method_exists($class, $function)){// check the function for a particular page
$obj->$function();// and call the function if exixts
}
else{
    die("function does not exists");
}
?>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/search.js"></script>
</body>
</html>