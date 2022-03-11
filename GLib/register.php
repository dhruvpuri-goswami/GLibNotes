<?php
    include "connection.php";
    if(isset($_POST['btn-signup']))
	{
		$post_password1=mysqli_real_escape_string($conn,$_POST['password']);
		$post_password2=mysqli_real_escape_string($conn,$_POST['con_password']);
		if($post_password1 == $post_password2)
		{
            $post_uname=mysqli_real_escape_string($conn,$_POST['uname']);
            $post_email=mysqli_real_escape_string($conn,$_POST['email']);
			$sql = "INSERT INTO tbl_user (user_name,email, password)
			VALUES ('$post_uname', '$post_email', '$post_password1')";
			if (mysqli_query($conn, $sql)) 
            {
                sleep(2);
                header("location: login.php");
            }
            else 
            {
                sleep(2);
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
		}
	}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sign Up | GLib</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="stylelogin.css" type="text/css" media="all" />
    <!--//Style-CSS -->
</head>

<body>

    <!-- form section start -->
    <section class="w3l-workinghny-form ">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" style="pointer-events:none;"> Register Now </a></h1>

                </div>
                <div class="workinghny-block-grid w3-margin-top">
                    <div class="workinghny-left-img align-end">
                        <img src="assests/images/reg.png" height="500px" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">

                        <div class="login-form-content">
                            <form class="signin-form" method="post">
                                <div class="one-frm">

                                    <label>E-Mail ID</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Your Email-ID"
                                        required="">
                                </div>
                                <div class="one-frm">
                                    <label>User Name</label>
                                    <input type="uname" name="uname" id="uname"
                                        placeholder="Enter User Name .. (It will displayed in your profile)"
                                        required="">
                                </div>
                                <div class="one-frm">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password" placeholder="Enter Password"
                                        required="">
                                </div>
                                <div class="one-frm">
                                    <label>Confirm Password</label>
                                    <input type="password" name="con_password" id="con_password"
                                        placeholder="Enter Confirm Password" required="">
                                </div>
                                <button type="submit" class="btn btn-style mt-3 w3-teal" name="btn-signup">Sign Up
                                </button>
                                <p class="already">Do you have an account? <a href="login.php"
                                        class="w3-hover-text-teal">Login Now</a></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>