<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý điểm sinh viên-thông tin khoa </title>
    <link rel="stylesheet" href="../admin/index.css">
    <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="header_left">
            <H3 style="color: white;">HỆ THỐNG QUẢN LÝ- ĐẠI HỌC THỦY LỢI </H3>
        </div>
    </header>
    <main>
        <div class="menu_loyal-points">
            <div class="container-fluid">
                <div id="menu">
                    <ul>
                        <li><a href="student.php">Quản lý sinh viên</a></li>
                        <li><a href="add_scores.php">Quản lý điểm</a></li>
                        <li><a href="scores.php">Quản lý bảng điểm</a></li>
                        <li><a href="class.php">Quản lý lớp học </a></li>
                        <li><a href="../project.php">Trang chủ </a></li>
                        <li><a href="#"> Đăng xuất </a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="faculty">
                <div class="title">
                    <h2>Quản lý điểm </h2>
                </div>
                <div class="information">
                    <div class="container-fluid">
                    <form action="process_addscores.php" role="form" method="post" style="margin-top:60px;">
                                       <label for="">Mã sinh viên: </label><input style="margin-left:20px;" type="text" name="id_student"><br>
                                       <label for="">Mã môn học: </label><input style="margin-left:20px;" type="text" name="id_subject"><br>
                                       <label for="">Điểm quá trình: </label><input style="margin-left:5px;" type="text" name="score1"><br>
                                       <label for="">Điểm thi: </label><input style="margin-left:50px;" type="text" name="score2">
                                       <label for="">Điểm trung bình: </label><input style="margin-left:15px;" type="text" name="total_scores">
                                       <label for="">Điểm chữ: </label><input style="margin-left:15px;" type="text" name="score_convert">
                                       <button type="submit" name="submit" style="margin-left:150px;">Thêm</button>
                    </form>
                    </div>
                </div>
                <div class="table_teacher">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th scope="col">Mã môn học</th>
                                <th scope="col">Mã sinh viên</th>
                                <th scope="col">Điểm quá trình</th>
                                <th scope="col">Điểm thi</th>
                                <th scope="col">Điểm TB</th>
                                <th scope="col">Điểm chữ</th>

                            </tr>
                        </thead>
                        <tbody id="data">

                                <?php
                                 include_once('../mysql_connect.php');
                                 $sql = "SELECT * FROM scores";
                                 mysqli_set_charset($dbconn,"uft8");
                                 $result = mysqli_query($dbconn,$sql);
                                 if(mysqli_num_rows($result)>0){
                                     while($row = mysqli_fetch_assoc($result)){
                                         ?>
                                         <tr>
                                         <td><?php echo $row['id_subject']  ?> </td>
                                         <td><?php echo $row['id_student']  ?> </td>
                                         <td><?php echo $row['score1']  ?> </td>
                                         <td><?php echo $row['score2']  ?> </td>
                                         <td><?php echo $row['total_scores']  ?> </td>
                                         <td><?php echo $row['score_convert']  ?> </td>
                                         <td><a href="del_subject.php?del=<?php echo $row['id_subject']?>">Xóa</a>
                                         <a href="../them-sua-xoa/index.php?del=<?php echo $row['id_subject']  ?>">Sửa </a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                                ?>
                                
                               
                            </tbody>
                    </table>
                </div>

            </div>




    </main>
</body>

</html>