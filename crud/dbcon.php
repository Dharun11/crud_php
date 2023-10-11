<?php
$con=mysqli_connect("localhost","root","","crudoperation");

if(!$con){
    die("connection failed ".mysqli_connect_error());

}else{
    echo "connection successfull!!!";
}
?>