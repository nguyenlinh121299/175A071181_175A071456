
<!doctype html>
<html>
    <head>
        <title>Đăng kí</title>
       
        <link rel="stylesheet" href="./css/dangky.css">
    </head>
    <body>
        <div class="to">
            <div class="form" action="xuly.php" method="POST">
                <h1> Sign up </h1>
                <i class="register"></i>
                <label style="margin-left: -150px;">User Name</label>
                <input type="text" name="hoten">
                <label  style="margin-left: -170px;" >password</label>  
                <input type="text" name="password">    
                <label style="margin-left: -110px;">Confirm_Password</label>
                <input type="text" name="Confirm Password"> 
                <label style="margin-left: -170px;">full name</label>
                <input type="text" name="full name"> 
                <label style="margin-left: -130px;">Email Address:</label>
                <input type="text" name="email"> 
                
                <input id="submit" type="submit" name="submit" value="đăng kí">
            </div>                
        </div>
    </body>
</html>