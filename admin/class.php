<?php
    include('header/header.php');

?>
                <div class="faculty">
                    <div class="title">
                        <h2>Quản lý lớp học </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="btn_themmoi">
                                <a href="addclass.html">
                                    <button type="submit" style="background-color:rgb(68, 233, 76)"> Thêm mới </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn_timkiem">
                                <form action="" style="text-align:right">
                                    Tìm kiếm: <input type="text" name="hoten"><input type="submit" placeholder="mã giảng viên" value="Tìm kiếm">
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="table_teacher">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Mã lớp</th>
                                    <th scope="col">Tên lớp</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">TG-bắt đầu</th>
                                    <th scope="col">TG-Kết thúc</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
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
                                    <th scope="row">1</th>
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
                                    <th scope="row">1</th>
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