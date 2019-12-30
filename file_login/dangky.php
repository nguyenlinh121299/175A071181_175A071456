<!doctype html>
<html>

<head>
    <title>Đăng ký</title>

    <link rel="stylesheet" href="./css/dangky.css">
</head>

<body>
    <div class="to">
        <div class="form">
            <form  action="xuly.php" method="POST" style="width:100%">
            <h1> Sign up </h1>
            <i class="register"></i>
            <label style="margin-left: -180px;">Email</label>
            <input type="text" name="email">
            <label style="margin-left: -160px;">Password</label>
            <input type="password" name="password">
            <label style="margin-left: -100px;">Confirm_Password</label>
            <input type="password" name="cf_password">
            <label style="margin-left: -150px;">Full Name</label>
            <input type="text" name="full_name">
            <strong>level:</strong>
            <select name="user" id="">
                <option value="1">admin</option>
                <option value="0"> teacher </option>
            </select>
            <br>
           
            <input id="submit" type="submit" name="submit" value="đăng kí">
            </form>
        </div>
    </div>
</body>

</html>