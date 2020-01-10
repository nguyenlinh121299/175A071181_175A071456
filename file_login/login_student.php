<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login_students</title>
    <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login_students.css">
</head>
<body>
    <header>
        <div class="header_left">
            <H3>HỆ THỐNG ĐĂNG KÍ HỌC - ĐẠI HỌC THỦY LỢI </H3>
        </div>
        <div class="header_right">
             <p style="color: white;">nguyễn văn linh (175A071456) </p>
             <p><span style="color: rgb(15, 4, 6);">Vai trò: <span style="color: white;">Sinh viên</span></span> </p>
            
        </div>
    </header>
    <main>
        <form action="process-login.php" method="post">
           
          
            <div class="container" style="width:500px">
              <label for="uname"><b>mã sinh viên</b></label>
              <input type="text" placeholder="mã sinh viên" name="uname" required>  <!--required là thông báo bạn chưa điền vào-->
          
              <label for="psw"><b>mật khẩu</b></label>
              <input type="password" placeholder="mật khẩu " name="psw" required>
                  
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          
            <div class="container"  style=" width:500px;">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
    </main>
</body>
</html>