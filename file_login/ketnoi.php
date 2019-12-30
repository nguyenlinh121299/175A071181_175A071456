<?php
  $conn = mysqli_connect ('localhost','root','','project');
  if(!$conn)
  {
      die('kết nối thất bại'.mysqli_connect_error());
  }
?>