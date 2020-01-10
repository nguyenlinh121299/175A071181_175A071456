<?php
    include('header/header.php');


?>
                <div class="faculty">
                    <div class="title">
                        <h2>Quản lý tài khoản </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="btn_themmoi">
                                <button type="submit" style="background-color:rgb(68, 233, 76)"><a href="../file_login/dangky.php">  Thêm mới </a> </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn_timkiem">
                                <form action="#" style="text-align:right">
                                    Tìm kiếm: <input type="text" name="hoten"><input type="submit" value="Tìm kiếm">
                                </form>
                            </div>
                        </div>
   
                    </div>
                    
                   <div class="user">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Level</th>
                                <th scope="col">Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                 $dbconn = mysqli_connect ('localhost','root','','project_web');
                                 $sql = "SELECT * FROM user";
                                 mysqli_set_charset($dbconn,"uft8");
                                 $result = mysqli_query($dbconn,$sql);
                                 if(mysqli_num_rows($result)>0){
                                     while($row = mysqli_fetch_assoc($result)){
                                 ?>
                                         <tr>
                                         <td><?php echo $row['email']  ?> </td>
                                         <td><?php echo $row['password']  ?> </td>
                                         <td><?php echo $row['user_level']  ?> </td>
                                         <td><a href="del_user.php?del=<?php echo $row['email']?>">Xóa</a>
                                         </td>
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