
<!doctype html>
<html>

<head>
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./css/dangky.css">
</head>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/sign_up.js"></script>
<script type="text/javascript" src="js/script.js" defer></script>
<body>
    <div class="to">
        <form class="form" method="POST">
            <h1> Sign up </h1>
            <i class="register"></i>
            <label style="margin-left: -180px;">Email</label>
            <input type="text" name="email">
            <label style="margin-left: -160px;">Password</label>
            <input type="text" name="password">
            <label style="margin-left: -100px;">Confirm_Password</label>
            <input type="text" name="cf_password">
            <label style="margin-left: -180px;">Level</label>
            <input type="text" name="level">
            <br>
            <input id="submit" type="submit" name="submit" value="Đăng ký">
            <?php
                include('../mysql_connect.php');
                if(isset($_POST['submit'])){
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $cf_pass=$_POST['cf_password'];
                    $user_level=$_POST['level'];
                    if($email=="" || $password=="" || $cf_pass=="" || $user_level==""){
                        echo "<p style = 'text-align: center'>Hãy nhập đầy đủ thông tin của bạn! </p>";
                    }
                    else{
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO user VALUES('$email', '$password', '$user_level')";
                        $query = mysqli_query($dbconn,$sql);
                        if($query != 0){
                            echo "<p style = 'text-align: center'>Bạn đã đăng ký thành công! </p>";
                            echo "<p><a href='login.php'>Đăng nhập</a></p>";
                        }
                        else{
                            echo "<p style = 'text-align: center'>Bạn đã đăng ký không thành công! </p>";
                        }
                    }
                }

    ?>
        </form>
    </div>
    
</body>

</html>