<?php
    session_start();
    if(isset($_SESSION['username']))
    {
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home | GLib</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
</head>

<body>
    <div class="w3-top w3-margin">
        <div class="w3-bar">
            <a href="#home" class="w3-bar-item w3-button w3-sans-serif w3-wide" style="font-size: 18px;"><i
                    class="fa fa-book" style="font-size: 20px; margin-right: 5px;"></i>GLib Notes</a>

            <div class="w3-display-topmiddle">
                <a href="#"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white w3-text-red  w3-hover-border-black">Home</a>
                <a href="upload_notes.php"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-black">Upload Notes</a>
                <a href="search_notes.php"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white  w3-hover-border-black">Search Notes</a>
            </div>
            <div class="w3-right w3-margin-right">
                <button type="button" class="w3-button w3-margin-right w3-border-teal w3-round-large w3-border"><a
                        href="logout.php" style="text-decoration: none;">Log Out</a></button>
            </div>
        </div>
    </div>
</body>

</html>
<?php
    }
    else
    {
        header("location: login.php");
    }
?>