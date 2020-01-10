<?php
include('../mysql_connect.php');
    if(isset($_POST['submit']) && $_POST['id_subject'] !='' && $_POST['id_student'] !='' && $_POST['score1'] !=''&& $_POST['score2'] !='' && $_POST['total_scores'] !='' && $_POST['score_convert'] !='')
    {
        $id_subject = $_POST['id_subject'];
        $id_student = $_POST['id_student'];
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $total_scores = $_POST['total_scores'];
        $score_convert = $_POST['score_convert'];
        $query = "INSERT INTO scores( id_subject,id_student,score1,score2,total_scores,score_convert) values('$id_subject','$id_student','$score1',' $score2','$total_scores',' $score_convert')";
        if(mysqli_query($dbconn, $query)){
            header('location:add_scores.php');
        }
    }
?>