<?php
    require('../mysql_connect.php');
    if(isset($_POST['Login'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $q = "SELECT * FROM user WHERE email='$email'";
        $result=@mysqli_query($dbconn,$q);
        $num_row=@mysqli_num_rows($result);
        $row=@mysqli_fetch_array($result,MYSQLI_ASSOC);

        $passhash= $row['password'];
        if(password_verify($pass, $passhash) && $num_row ==1)
        {
            session_start();
            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['user_level'] = (int) $row['user_level'];
            echo $_SESSION['user_level'];
            echo header('Location:../project.php');
        }

?>


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
                <form action="" method="POST">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i></i>
                        <input type="text" placeholder="Nhập username">
                    </div>
                    <div class="input-box">
                        <i></i>
                        <input type="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="btn-box">
                        <button><a href="login.html"  style="text-decoration: none; color: white;">  Admin</a></button>
                        <button><a  href="teacher.html" style="text-decoration: none; color: white;"> Teacher </a > </button>
                        <button type="submit">
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