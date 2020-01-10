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
                        <h2>Quản lý lớp học </h2>
                    </div>
                    <div class="information">
                        <div class="container-fluid">
                            <form action="xuly-ad-student.php" role="form" method="post" style="margin-top:60px;">
                                        <label for="">Mã lớp: </label><input style="margin-left:50px;" type="text" name="id_class"><br>
                                        <label for="">Mã môn học: </label><input style="margin-left:10px;" type="text" name="id_sunject"><br>
                                        <label for="">Kỳ học: </label><input style="margin-left:53px;" type="text" name="semester"><br>
                                        <label for="">Ngày bắt đầu: </label><input style="margin-left:4px;" type="text" name="date_start">
                                        <label for="">Ngày kết thúc : </label><input style="margin-left:4px;" type="text" name="date_end">
                                        <label for="">Số lượng: </label><input style="margin-left:5px;" type="text" name="">
                                        <button type="submit" name="submit" style="margin-left:150px;">Thêm</button>
                            </form>
                        </div>
                    </div>
                   
                    <div class="table_teacher">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Mã lớp</th>
                                    <th scope="col">Mã môn học</th>
                                    <th scope="col">Kỳ học</th>
                                    <th scope="col">Ngày bắt đầu</th>
                                    <th scope="col">Ngày kết thúc</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Xử lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>cse485</td>
                                    <td>59TH2</td>
                                    <td>30</td>
                                    <td>10/10/2019</td>
                                    <td>12/12/2019</td>
                                    <td>đang diễn ra</td>
                                    <td><button type="button" class="btn btn-primary"><img src="../image/deleted.jpg"
                                                width="15px" height="15px" alt=""></button>
                                        <button type="button" class="btn btn-info"><img src="../image/repair2.jpg"
                                                width="15px" height="15px" alt=""></button>
                                    </td>

                                </tr>
                                <tr>
                                    
                                    <td>cse485</td>
                                    <td>59TH2</td>
                                    <td>30</td>
                                    <td>10/10/2019</td>
                                    <td>12/12/2019</td>
                                    <td>đang diễn ra</td>
                                    <td><button type="button" class="btn btn-primary"><img src="../image/deleted.jpg"
                                                width="15px" height="15px" alt=""></button>
                                        <button type="button" class="btn btn-info"><img src="../image/repair2.jpg"
                                                width="15px" height="15px" alt=""></button>
                                    </td>

                                </tr>
                                <tr>
                                    
                                    <td>cse485</td>
                                    <td>59TH2</td>
                                    <td>30</td>
                                    <td>10/10/2019</td>
                                    <td>12/12/2019</td>
                                    <td>đang diễn ra</td>
                                    <td><button type="button" class="btn btn-primary"><img src="../image/deleted.jpg"
                                                width="15px" height="15px" alt=""></button>
                                        <button type="button" class="btn btn-info"><img src="../image/repair2.jpg"
                                                width="15px" height="15px" alt=""></button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>



    </main>
</body>

</html>