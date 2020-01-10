<?php
    include('header/header.php')

?>
                <div class="faculty">
                    <div class="title">
                        <h2>Quản lý tin tức </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="btn_themmoi">
                                <button type="submit" style="background-color:rgb(68, 233, 76)"> Thêm mới </button>
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

                    <div class="news">
                        <table border="2" class="table">
                            <tr>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Thể loại</th>
                            </tr>
                            <tr>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>
                                    <select>
                              <option value="Tin tức">Tin tức</option>
                              <option value="Thông báo">Thông báo</option>
                            </select>
                                </td>
                                <td><button>Sửa</button></td>
                                <td><button>Xóa</button></td>
                            </tr>
                            <tr>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>
                                    <select>
                              <option value="Tin tức">Tin tức</option>
                              <option value="Thông báo">Thông báo</option>
                            </select>
                                </td>
                                <td><button>Sửa</button></td>
                                <td><button>Xóa</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>



    </main>
</body>

</html>