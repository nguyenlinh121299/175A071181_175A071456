<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>quản lí điểm sinh viên-thông tin khoa </title>
    <link rel="stylesheet" href="index.css">
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
                        <li><a href="index.php">Quản lí giảng viên </a></li>
                        <li><a href="student.php">Quản lí sinh viên</a></li>
                        <li><a href="point.php">quản lý bảng điểm</a></li>
                        <li><a href="news.php">quản lý tin tức </a></li>
                        <li><a href="class.php">quản lý lớp học </a></li>
                        <li><a href="../project.php">trang chủ </a></li>
                        <li><a href="#">đăng xuất </a></li>
                    </ul>
                </div>
                <div class="faculty">
                    <div class="title">
                        <h2>thêm lớp học </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title">
                                <h4>thông tin lớp</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">

                        </div>

                    </div>
                    <div class="information_class">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for=""> Khoa :</label>
                                    <select>
                                        <option selected="selected"></option>
                                        <option>công nghệ thông tin</option>
                                       
                                    </select>
                                    <br>
                                    <label for=""> ngành đào tạo:</label>
                                    <select>
                                        <option selected="selected"></option>
                                        <option>công nghệ thông tin</option>
                                        <option>hệ thống</option>
                                        <option>phần mềm</option>
                                    </select> <br>

                                    <label for=""> số lượng :</label>
                                </div>
                                <div class="col-md-4">

                                    <label for=""> môn học : </label>
                                    <select>
                                        <option selected="selected"></option>
                                        <option>công nghệ web</option>
                                        <option>phân tích thiết kế</option>
                                        <option></option>
                                    </select> <br>
                                    <label for=""> giảng viên :</label>
                                    <select>
                                        <option selected="selected"></option>
                                        <option>nguyễn văn nam</option>
                                        <option>nguyễn văn dũng</option>
                                        <option></option>
                                    </select> <br>
                                    <label for=""> tên lớp : </label>
                                    <select>
                                        <option selected="selected"></option>
                                        <option>59TH2</option>
                                        <option>59HT</option>
                                        <option></option>
                                    </select>
                                    <br>
                                  
                                </div>
                                <div class="col-md-4">
                                    <label for=""> ngày bắt đầu :</label> <input type="text"> <br>
                                    <label for=""> ngày kết thúc :</label> <input type="text"> <br>
                                    <button type="submit" style="background-color:rgb(68, 233, 76)">  thêm mới </button>
                                </div>
                            </div>

                        </div>
                    </div>
                   <div class="table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th scope="col">mã lớp</th>
                                <th scope="col">tên lớp</th>
                                <th scope="col">phòng học</th>
                                <th scope="col">học phí</th>
                                <th scope="col">TG-bắt đầu</th>
                                <th scope="col">TG-Kết thúc</th>
                                <th scope="col">trạng thái</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                   </div>


                </div>
            </div>

        </div>



    </main>
</body>

</html>