<?php
 include_once('../mysql_connect.php');

  if(isset($_POST['submit']) && $_POST['name_subject'] !='' && $_POST['id_subject'] !='' && $_POST['id_teacher'] !='' && $_POST['id_majors'] !='' )
  {
    $name_subject = $_POST['name_subject'];
    $id_subject = $_POST['id_subject'];
    $id_teacher = $_POST['id_teacher'];
    $id_majors = $_POST['id_majors'];
    $query = "INSERT INTO subjects(id_subject,name_sub,id_teacher,id_majors) values('$id_subject','$name_subject','$id_teacher',$id_majors)";
   
   if( mysqli_query($dbconn, $query))
   {
    header('location:subjects.php');
   }
      
  }
?>