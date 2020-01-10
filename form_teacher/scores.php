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
                <h2>Quản lý Bảng Điểm </h2>
            </div>
            <div class="information">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" style="font-weight: bold;"> Khoa </label><br>
                                <select>
                                        <option selected="selected"></option>
                                        <option>Công nghệ thông tin</option>
                                       
                                    </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" style="font-weight: bold;"> Ngành đào tạo </label><br>
                                <select>
                                        <option selected="selected"></option>
                                        <option value=""> Công nghệ thông tin</option>
                                        <option> Phần mềm</option>
                                        <option>Hệ thống</option>

                                    </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" style="font-weight: bold;"> Môn học </label><br>
                                <select>
                                        <option selected="selected"></option>
                                        <option>Công nghệ web</option>
                                        <option>Phân tích thiết kế </option>
                                    </select>

                            </div>
                            <div class="col-md-3">
                                <label for="" style="font-weight: bold;"> Lớp học </label><br>
                                <select>
                                        <option selected="selected"></option>
                                        <option>59TH2</option>
                                        <option>59HT </option>
                                    </select> <br>
                                <label for="" style="font-weight: bold;"> Học kỳ: </label> <br>
                                <select>
                                        <option selected="selected"></option>
                                        <option>2018-2019 (1) </option>
                                        <option>2018-2019 (2) </option>
                                        <option>2017-2018 (1) </option>
                                        <option>2017-2018 (2) </option>
                                    </select>
                                <div class="btn">
                                    <button type="submit" style="background-color:rgb(68, 233, 76)" style="text-align: right;"> Tìm kiếm </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="table_teacher">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Số thứ tự</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Điểm TP</th>
                            <th scope="col">Điểm Thi</th>
                            <th scope="col">Điểm TB</th>
                            <th scope="col">Điểm chữ</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>175A07</td>
                            <td>Nguyễn Văn Dũng</td>
                            <td>12/12/1999</td>
                            <td>7</td>
                            <td>7</td>
                            <td>7</td>
                            <td>B</td>
                            <td><button type="button" class="btn btn-primary"><img src="../image/deleted.jpg" width="15px" height="15px" alt=""></button>
                                <button type="button" class="btn btn-info"><img src="../image/repair2.jpg"width="15px" height="15px" alt=""></button>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>175A07</td>
                            <td>Nguyễn Văn Dũng</td>
                            <td>12/12/1999</td>
                            <td>7</td>
                            <td>7</td>
                            <td>7</td>
                            <td>B</td>
                            <td><button type="button" class="btn btn-primary"><img src="../image/deleted.jpg" width="15px" height="15px" alt=""></button>
                                <button type="button" class="btn btn-info"><img src="../image/repair2.jpg"width="15px" height="15px" alt=""></button>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>175A07</td>
                            <td>Nguyễn Văn Dũng</td>
                            <td>12/12/1999</td>
                            <td>7</td>
                            <td>7</td>
                            <td>7</td>
                            <td>B</td>
                            <td><button type="button" class="btn btn-primary"><img src="../image/deleted.jpg" width="15px" height="15px" alt=""></button>
                                <button type="button" class="btn btn-info"><img src="../image/repair2.jpg"width="15px" height="15px" alt=""></button>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>




    </main>
</body>

</html>