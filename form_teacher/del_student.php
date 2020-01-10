<?php
$del_student = $_GET['del'];
$dbconn = mysqli_connect ('localhost','root','','project_web');
$sql = "DELETE FROM student Where id_student='$del_student'";
if(mysqli_query($dbconn,$sql))
{
    header('location:student.php');
}

?>