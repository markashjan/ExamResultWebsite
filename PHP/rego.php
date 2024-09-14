<?php
//Depending on which server using; in this case is localhost and MYSQL
//$name=variable name
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

//Makesure same as Frontend variable name
$name = $_POST["name"];
$num = $_POST["num"];
$course = $_POST["course"];


//Create Connection
$conn = new mysqli($servername,$username,$password,$dbname);
//Check connection
if ($conn ->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

//SQL Query
//Parameter name needs to be same as top variable and FE variable
$sql = "INSERT INTO Table (parameter names)
VALUES('para names')";

//Error handling
if($conn->query($sql)===TRUE){
    echo "New record created successfully";
} else{
    echo "Error : ".$sql. "<br>" .  $conn->error;
}
//Stop connection
$conn->close();
?>