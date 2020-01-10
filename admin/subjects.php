<?php
    include('header/header.php');

?>
            <div class="faculty">
                <div class="title">
                    <h2>Quản lý môn học </h2>
                </div>
                <div class="information">
                    <div class="container-fluid">
                        <div class="col-md-12">
                        <div class="row ">
                        <div class="col-lg-4">
                            <div class="btn_themmoi">
                            <form action="add_subject.php" role="form" method="post" style="margin-top:60px;">
                                <label for="">Tên môn học: </label><input style="margin-left:27px;" type="text" name="name_subject"><br>
                                <label for="">Mã môn học: </label><input style="margin-left:30px;" type="text" name="id_subject"><br>
                                <label for="">Mã giáo viên: </label><input style="margin-left:27px;" type="text" name="id_teacher"><br>
                                <label for="">Mã ngành: </label><input  style="margin-left:45px;" type="text" name="id_majors"><br>
                                <button type="submit" name="submit" style="margin-left:30px;">Thêm</button>
                                </form>
                            </div>
                        </div>
                        <div class="table_subject">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Mã môn học</th>
                                    <th scope="col">Tên môn hoc</th>
                                    <th scope="col">Mã giáo viên</th>
                                    <th scope="col">Mã ngành</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="data">

                            <?php
                                include_once('../mysql_connect.php');
                                $sql = "SELECT * FROM subjects";
                                mysqli_set_charset($dbconn,"uft8");
                                $result = mysqli_query($dbconn,$sql);
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                        <tr>
                                        <td><?php echo $row['id_subject']  ?> </td>
                                        <td><?php echo $row['name_sub']  ?> </td>
                                        <td><?php echo $row['id_teacher']  ?> </td>
                                        <td><?php echo $row['id_majors']  ?> </td>
                                        <td><a href="del_subject.php?del=<?php echo $row['id_subject']?>">Xóa</a>
                                        <a href="../them-sua-xoa/index.php?del=<?php echo $row['id_majors']  ?>">Sửa </a></td>
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




    </main>
</body>

</html>