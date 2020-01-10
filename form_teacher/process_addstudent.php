<?php
    include('../mysql_connect.php');
    if(isset($_POST['submit']) && $_POST['id_student'] !='' && $_POST['name'] !='' && $_POST['email'] !='' && $_POST['id_class'] !='' )
    {
        $id_student = $_POST['id_student'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id_class = $_POST['id_class'];
        $query = "INSERT INTO student( id_student,name,email,id_class) values('$id_student','$name','$email','$id_class')";
        if(mysqli_query($dbconn, $query)){
        header('location:student.php');
        }
    }
    else
    {
    
    }
?>