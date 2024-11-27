<?php
include'Connect.php';
if(isset($_POST['submit']))
{
    $fName=$_POST['uName'];
    $email=$_POST['email'];
    $answer=$_POST['uAnswer'];
    $feedback=$_POST['ufeedback'];
$sql="insert into form (fname,email,answer,feedback) values ('$fName','$email','$answer','$feedback') ";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Form submitetd')</script>";
}
else{
    echo "error:".mysqli_error($con);
}
mysqli_close($con);
}?>