<?php
	include('../mysql_connect.php');
    if (isset($_POST['login_submit'])) 
    {
		// lấy thông tin người dùng
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user_level = $_POST['level'];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công
		$email = strip_tags($email);
		$email = addslashes($email);
		$password = strip_tags($password);
		$password = addslashes($password);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL ))
		{
			$error[] ="invalid email format";
		}
		if(empty($error))
		{
            $sql_user = "SELECT * FROM user WHERE email ='$email'";
            $query = mysqli_query($dbconn,$sql_user);
            $row = mysqli_fetch_assoc($query);
            if($row>0)
            {
                $veryPass = password_verify($password,$row['password']);
                if($veryPass && $row['user_level']==1)
                {
                    header("location:../admin/index.php");
                }
                else{
                    header("location:../form_teacher/index.php");
                }
            }
			
		}
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
                            <input type="text" name="email" placeholder="Nhập email" value="Email">
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" placeholder="Nhập mật khẩu" value="Password">
                        </div>
                        <div class="btn-box">
                            <label for=""class="check_lb">
                            <select name="level" id="">
                                <option value="1">admin</option>
                                <option value="0">teacher</option>
                            </select>
                            </label>
                            <button type="submit" name="login_submit">
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
