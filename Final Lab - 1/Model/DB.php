<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flabone";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error)
{
    echo "error connectiong db";
}
$sqlstr = "INSERT INTO flabonetable(numberone, numbertwo) VALUES('1', '2')";
if($conn -> query($sqlstr))
{
    echo "Data Inserted";
}
else
{
    echo "Failed toinsert data". $conn -> error;
}

?>