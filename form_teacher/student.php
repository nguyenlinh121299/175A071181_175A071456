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
                <div class="faculty">
                    <div class="title">
                        <h2>Quản lý Sinh Viên </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="btn_themmoi">
                              <a href="#">
                                <button type="submit" > Thông tin </button>
                              </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="btn_timkiem">
                                <form action="#">
                                    Tên sinh viên: <input name="user" type="text" />
                                    Mã sinh  viên: <input name="pass" type="text" />
                                    Môn học: <input name="name" type="text" />
                                    <input type="submit" value="Tìm" />
                                    </form>
                            </div>
                        </div>


                    </div>
                    <div class="faculty">
                   
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="btn_themmoi">
                  
                            <form action="../form_teacher/process_addstudent.php" role="form" method="post" style="margin-top:60px;">
                                       <label for="">Mã sinh viên: </label><input style="margin-left:5px;" type="text" name="id_student"><br>
                                       <label for="">Tên: </label><input style="margin-left:70px;" type="text" name="name"><br>
                                       <label for="">Email: </label><input style="margin-left:57px;" type="email" name="email"><br>
                                       <label for="">Mã lớp : </label><input style="margin-left:40px;" type="text" name="id_class"><br>
                                       <button type="submit" name="submit" style="margin-left:150px;">Thêm</button>
                                   </form>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table_teacher">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Mã sinh viên</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mã lớp</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="data">
                                <?php
                                 $dbconn = mysqli_connect ('localhost','root','','project_web');
                                 $sql = "SELECT * FROM student";
                                 mysqli_set_charset($dbconn,"uft8");
                                 $result = mysqli_query($dbconn,$sql);
                                 if(mysqli_num_rows($result)>0){
                                     while($row = mysqli_fetch_assoc($result)){
                                 ?>
                                         <tr>
                                         <td><?php echo $row['id_student']  ?> </td>
                                         <td><?php echo $row['name']  ?> </td>
                                         <td><?php echo $row['email']  ?> </td>
                                         <td><?php echo $row['id_class']  ?> </td>
                                         <td><a href="del_student.php?del=<?php echo $row['id_student'];?>">Xóa</a>
                                         <a href="#"> Sửa </a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                                ?>
                                
                               
                            </tbody>
                        </table>
                    </div>

                </div>

                </div>
            </div>

        </div>



    </main>
</body>

</html>