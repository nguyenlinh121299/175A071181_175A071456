<?php
$id_subject = $_GET['del'];
$dbconn = mysqli_connect ('localhost','root','','project_web');
$sql = "DELETE FROM subjects Where id_subject='$id_subject'";
if(mysqli_query($dbconn,$sql))
{
    header('location:subject.php');
}

?>