<?php
$id_bai_viet = $_GET['id_baiviet'];
$sql = "DELETE FROM tin_tuc WHERE id = $id_bai_viet";
mysqli_query($conn,$sql);
header("location:index.php?page_layout=danh_sach_bai_viet");
?>