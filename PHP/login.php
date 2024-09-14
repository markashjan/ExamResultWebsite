<?php
//Servername and DB name
$servername = "";
$username = "";
$password = "";
$dbname = "";

//Variable names must be same everywhere: DB,FE
$name = $_POST[""];


//Create Connection
$conn = new mysqli($servername,$username,$password,$dbname);
//Check connection
if ($conn ->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

//SQL Query 
$sql = "SELECT * FROM TABLE WHERE username = ?"




?>