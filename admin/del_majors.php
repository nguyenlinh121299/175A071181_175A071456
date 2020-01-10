<?php
$del_majors = $_GET['del'];
$dbconn = mysqli_connect ('localhost','root','','project_web');
$sql = "DELETE FROM majors Where id_majors='$del_majors'";
if(mysqli_query($dbconn,$sql))
{
    header('location:majors.php');
}

?>