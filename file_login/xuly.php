<?php
		include('ketnoi.php');
      
  			//lấy thông tin từ các form bằng phương thức POST
  			$Email = $_POST["email"];
              $password = $_POST["password"];
              $cf_password = $_POST["cf_password"];
 		      $user_level = $_POST["user"];
  			$full_name = $_POST["full_name"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if (isset($_POST["submit"]) && $_POST["email"] != ""  &&  $_POST["password"] != "" &&  $_POST["cf_password"] != "" && $_POST["full_name"] != "" )
               {
			    if ($password != $cf_password)
				{
                    header("location: dangky.php");
				}
				$password = password_hash($password, PASSWORD_DEFAULT);
				$queryinsert =" INSERT INTO user(email , password ,full_name,user_level) VALUES('$Email','$password','$full_name','$user_level')";
				mysqli_query($conn,$queryinsert);
				echo "đăng kí thành công";
			
				// $old = mysqli_query($conn, "SELECT * from  user where email = '$Email'");


				// if ($old )
				//  {
				
				//   echo "tài khoản đã tồn tại";
				// }
				// else
				// {
					
				// }
			     	
			  }
			  else
               {
				   header("location: dangky.php");
			   }
		
	  
	
    ?>
   