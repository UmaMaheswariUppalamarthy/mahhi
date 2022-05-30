<?php
require_once 'connection.php';
$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$rno = $_POST['rollnumber'];
$Message = $_POST['msg'];

$insert = "insert into form(username , password,email,rollnumber,Msg) values ('$Username','$Password','$Email','$rno','$Message')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered sucessfully';
}
else
{
    echo 'not success';
}
 

?>
