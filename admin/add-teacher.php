<?php
    include_once('../mysql_connect.php');
    if(isset($_POST['submit']) && $_POST['id_teacher'] !='' && $_POST['name'] !='' && $_POST['email'] !='' && $_POST['subject'] !='' && $_POST['phone']!='' )
    {
        $id_teacher = $_POST['id_teacher'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $phone = $_POST['phone'];
        $query = "INSERT INTO teacher( id_teacher,name_teacher,email,department_subject,phone_number) values('$id_teacher','$name','$email','$subject','$phone')";
        if(mysqli_query($dbconn, $query)){
        header('location:teacher.php');
        }
    }
    else
    {
    }
?>