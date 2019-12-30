<?php include('ketnoi.php');?>
 

<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập vào website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/login.css" rel="stylesheet" type="text/css" />
    <link href="../boostrap/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="title">
                <p> Website Trường Đại học Thủy Lợi </p>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="login-form">
                <form action=" process-login.php" method="POST">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i></i>
                        <input type="text" name="txtemail" placeholder="Nhập email">
                    </div>
                    <div class="input-box">
                        <i></i>
                        <input type="password" name="txtPassword" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="btn-box">
                       <label for=""class="check_lb">
                           <select name="user" id="">
                               <option value="1">admin</option>
                               <option value="0">teacher</option>
                           </select>
                       </label>
                        <button type="submit" name="btn_submit">
                            Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <p style="text-align:center">Địa chỉ : 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI. Điện thoại: (024) 3852 2201 - Fax: (024) 3563 3351 Email: phonghcth@tlu.edu.vn</p>
        </div>
    </footer>
</body>

</html>