<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login Page</title>
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
                    <h1><a class="brand-logo" style="pointer-events:none;"> Log In </a></h1>

                </div>
                <div class="workinghny-block-grid w3-margin-top">
                    <div class="workinghny-left-img align-end">
                        <img src="assests/images/login.png" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">

                        <div class="login-form-content">
                            <form class="signin-form" method="post">
                                <div class="one-frm">

                                    <label>E-Mail ID</label>
                                    <input type="email" name="email" id="username" placeholder="Enter Your Email-ID"
                                        required="">
                                </div>
                                <div class="one-frm">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password" placeholder="Enter Password"
                                        required="">
                                </div>
                                <button type="submit" class="btn btn-style mt-3 w3-teal" name="btn-login">Sign In
                                </button>
                                <p class="already">Don't have an account? <a href="register.php"
                                        class="w3-hover-text-teal">Register Now</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
    include 'connection.php';
    if(isset($_REQUEST['btn-login']))
    {
        $mail=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
        echo $mail.$pass;
        $sql="SELECT * FROM tbl_user WHERE email='$mail' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
        if($count>=1)
        {
            $_SESSION['username']=$rows['user_name'];
            echo "<script>
                alert('You are user!!!');
                window.location.href='userhome.php';
            </script>";
        }
        else
        {
            echo "<script>
                alert('You are not user!!!');
                window.location.href='register.php';
            </script>";
        }
    }
?>