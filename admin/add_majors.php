<?php
    include('../mysql_connect.php');
    if(isset($_POST['submit']) && $_POST['id_majors'] !='' && $_POST['name_majors'] !='' )
    {
        $id_majors = $_POST['id_majors'];
        $name_majors = $_POST['name_majors'];
        $query = "INSERT INTO majors( id_majors,majors_name) values('$id_majors','$name_majors')";
        if(mysqli_query($dbconn, $query)){
            header('location:majors.php');
        }
    }
?>