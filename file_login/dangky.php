<?php
    function Insert($email,$password,$user_level,$dbconn)
    {
        $q = "INSERT INTO user
              VALUES ('$email','$password',NOW(),'$user_level')";      
                $result = @mysqli_query ($dbconn, $q); // Run the query.
                if ($result) {
                    session_start();
                    $_SESSION['user_level']=$user_level;
                    echo header("Location: ../project.php");
                    exit();
                }
                else{
                    // If it did not run // Message:
                    echo 'System Error! You could not be registered due to a system error. We apologize for any inconvenience.'; 
                } // End of if ($result)
                     mysqli_close($dbconn); // Close the database connection.
                     exit();
    }



try {
    require('../mysql_connect.php');
    if(isset($_POST['register'])){
        $email=$_POST['email'];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        if(!empty($_POST["email"]) &&! empty($_POST["password"]) && !empty($_POST["password"]) && $password!=$_POST['repassword']);
    }
    $p="SELECT * FROM user WHERE email='$email'";
    $result=@mysqli_query($dbconn,$p);
    $num_row=@mysqli_num_rows($result);
    if($num_row==0)
    {
        $p="SELECT * FROM student WHERE email='$email'";
        $result1=@mysqli_query($dbconn,$p);
        $num_row1=@mysqli_num_rows($result1);
        if($num_row1==0)
        {
            $p2="SELECT * FROM teacher WHERE email='$email'";
                $result2=@mysqli_query($dbconn,$p2);
                $num_row2=@mysqli_num_rows($result2);
                if($num_row2!=0){
                $user_level=1;
                Insert($email,$password,$user_level,$dbconn);
        }
    }
    else
    {
        $user_level=2;
        Insert($email,$password,$user_level,$dbconn);
    }
}
}
catch(Exception $id)
{
    // print "An Exception occurred. Message: " . $e->getMessage();
    print "The system is busy please try later";
}
catch(Error $id)
{
    //print "An Error occurred. Message: " . $e->getMessage();
    print "The system is busy please try again later";
}

?>






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
        <div class="form" action="xuly.php" method="POST">
            <h1> Sign up </h1>
            <i class="register"></i>
            <label style="margin-left: -180px;">Email</label>
            <input type="text" name="email">
            <label style="margin-left: -160px;">Password</label>
            <input type="text" name="password">
            <label style="margin-left: -100px;">Confirm_Password</label>
            <input type="text" name="Confirm Password">
            <select name="user" id="">
                <option value="1">admin</option>
                <option value="0">teacher</option>
            </select>
            <br>
            <input id="submit" type="submit" name="submit" value="Đăng ký">
        </div>
    </div>
</body>

</html>