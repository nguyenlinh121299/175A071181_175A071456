<?php
$del_teacher = $_GET['del'];
$dbconn = mysqli_connect ('localhost','root','','project_web');
$sql = "DELETE FROM teacher Where id_teacher='$del_teacher'";
if(mysqli_query($dbconn,$sql))
{
    header('location:teacher.php');
}

?>