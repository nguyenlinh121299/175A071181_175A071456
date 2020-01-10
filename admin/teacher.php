<?php
    include('header/header.php')

?>
                <div class="faculty">
                    <div class="title">
                        <h2>Quản lí giảng viên </h2>
                    </div>
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="btn_themmoi">
                  
                            <form action="add-teacher.php" role="form" method="post" style="margin-top:60px;">
                                       <label for="">id giáo viên: </label><input style="margin-left:12px;" type="text" name="id_teacher"><br>
                                       <label for="">Tên giáo viên: </label><input type="text" name="name"><br>
                                       <label for="" >Mail: </label><input style="margin-left:60px;" type="email" name="email"><br>
                                       <label for="">Bộ môn: </label><input style="margin-left:35px;" type="text" name="subject"><br>
                                       <label for="">Phone: </label><input style="margin-left:45px;" type="text" name="phone"><br>
                                       <button type="submit" name="submit" style="margin-left:150px;">Thêm</button>
                                   </form>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="btn_timkiem">
                                <form action="#">
                                    Tên giảng viên: <input name="user" type="text" />
                                    mã giảng viên: <input name="pass" type="text" />
                                    môn dạy: <input name="name" type=”text” />
                                    <input type="submit" value="tìm" />
                                    </form>
                            </div>
                        </div>


                    </div>
                    <div class="table_teacher">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                   
                                    <th scope="col">mã giảng viên</th>
                                    <th scope="col">họ và tên</th>
                                    <th scope="col">email</th>
                                   
                                    <th scope="col">môn dạy</th>
                                    <th scope="col">số điên thoại</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody id="data">

                                <?php
                                 include('../mysql_connect.php');
                                 $sql = "SELECT * FROM teacher";
                                 mysqli_set_charset($dbconn,"uft8");
                                $result = mysqli_query($dbconn,$sql);
                                 if(mysqli_num_rows($result)>0){
                                     while($row = mysqli_fetch_assoc($result)){
                                         ?>
                                         <tr>
                                         <td><?php echo $row['id_teacher']  ?> </td>
                                         <td><?php echo $row['name_teacher']  ?> </td>
                                         <td><?php echo $row['email']  ?> </td>
                                         <td><?php echo $row['department_subject']  ?> </td>
                                         <td><?php echo $row['phone_number']  ?> </td>
                                         <td><a href="del_teacher.php?del=<?php echo $row['id_teacher']  ?>">Xóa </a>
                                         <a href="../them-sua-xoa/index.php?del=<?php echo $row['id_teacher']  ?>">Sửa </a></td>
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