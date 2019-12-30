<?php
	//Gọi file connection.php ở bài trước
	include('ketnoi.php');
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$email = $_POST["txtemail"];
		$password = $_POST["txtPassword"];
		$user_level = $_POST["user"];
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
			$sqltk = "SELECT * FROM USER WHERE email ='$email'";
			$taikhoan = mysqli_query($conn,$sqltk);
			if(mysqli_num_rows($taikhoan)>0 )
			while($row = mysqli_fetch_assoc($taikhoan))
			{
				$validPassword = password_verify($password, $row['password']);
				if($validPassword)
				{
					if(($row['user_level'])==1)
					{
						header('location: index-admin.html ');
					}
					else
					{
						header('location: index-teacher.html');
					}
				}
			}
		}	
	}
?>