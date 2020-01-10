<?php
$del_user = $_GET['del'];
$dbconn = mysqli_connect ('localhost','root','','project_web');
$sql = "DELETE FROM user Where email ='$del_user'";
if(mysqli_query($dbconn,$sql))
{
    header('location:user.php');
}

?>