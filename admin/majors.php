<?php
    include('header/header.php')

?>
                <div class="faculty">
                    <div class="title">
                        <h2>Quản lí ngành học </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            
                        </div>
                        <div class="col-lg-8">
                            <div class="btn_timkiem">
                                <form action="#">
                                    Tên ngành: <input name="user" type="text" />
                                    Mã ngành: <input name="pass" type="text" />
                                    <input type="submit" value="Tìm" />
                                    </form>
                            </div>
                        </div>


                    </div>
                    
                    <div class="faculty">
                  
                 

                    <form action="add_majors.php" role="form" method="post" style="margin-top:60px;">
                        <label for="" style="margin-left:30px;">Mã ngành: </label><input type="text" name="id_majors">
                        <label for="">Tên ngành: </label><input type="text" name="name_majors">
                        <button type="submit" name="submit" style="margin-left:30px;">Thêm</button>
                    </form>
                    <div class="table_majors">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                   
                                    <th scope="col">Mã ngành</th>
                                    <th scope="col">Tên ngành </th>
                                    <th scope="col">Actions </th>

                                </tr>
                            </thead>
                            <tbody id="data">

                                <?php
                               include_once('../mysql_connect.php');
                                 $sql = "SELECT * FROM majors";
                                 mysqli_set_charset($dbconn,"uft8");
                                 $result = mysqli_query($dbconn,$sql);
                                 if(mysqli_num_rows($result)>0){
                                     while($row = mysqli_fetch_assoc($result)){
                                         ?>
                                         <tr>
                                         <td><?php echo $row['id_majors']  ?> </td>
                                         <td><?php echo $row['majors_name']  ?> </td>                                     
                                         <td><a href="del_majors.php?del=<?php echo $row['id_majors'];?>">Xóa</a>
                                         <a href="../them-sua-xoa/index.php?del=<?php echo $row['id_majors']  ?>">Sửa </a></td>
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