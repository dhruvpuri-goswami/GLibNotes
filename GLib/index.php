<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-top w3-margin">
        <div class="w3-bar">
            <a href="#home">
                <img src="logo.png" width="17%">
            </a>
            <div class="w3-display-topmiddle">
                <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white  w3-hover-border-black">Home</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-black">About
                    Us</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white  w3-hover-border-black">Contact
                    Us</a>
            </div>
            <div class="w3-right w3-margin-right">
                <button type="button"
                    class="w3-button w3-margin-right w3-border-teal w3-round-large w3-border w3-hover-teal"><a
                        href="login.php">Log In Now</a></button>
            </div>
        </div>
    </div>
    <form method="POST" action="" class="w3-containe w3-center" style="margin-top: 7rem;">
        <h2>Get Any Notes For Free</h2>
        <h4>Find Your Notes..</h4>
        <input type="text" class="w3-margin-top w3-padding-16" style="height: 35px;padding-left: 10px;" width="100px"
            placeholder="Find Your Notes...">
        <input type="submit" class="w3-bar-item w3-button w3-teal w3-round" style="height: 39px;margin-bottom: 5px;"
            value="GO" name="go">
    </form>
</body>

</html>
<?php
    if(isset($_POST['go'])){
        echo "<script>
                alert('Please Login Yourself !!!');
                window.location.href='login.php';
            </script>";
    }
?>