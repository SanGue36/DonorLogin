<?php

session_start();

$con = mysqli_connect('localhost','root','123');
mysqli_select_db($con,'DonorRegistration');

$name = $_POST['user'];
$pass =$_POST['password'];
$ s="select * from donortable where name='$name'";

$result =mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num==1){
    echo"Username Already Taken";
}else{
  $reg="insert into donortable(name,password) values('$name','$pass)";
  mysqli_query($con , $reg);
  echo "Registration successful";
}


?>