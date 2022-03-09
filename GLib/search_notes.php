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
    <style>
    .scroll {
        height: 100%;
        overflow: scroll;
    }
    </style>
</head>

<body>
    <div class="w3-top w3-margin scroll">
        <div class="w3-bar">
            <a href="#home" class="w3-bar-item w3-button w3-sans-serif w3-wide" style="font-size: 18px;"><i
                    class="fa fa-book" style="font-size: 20px; margin-right: 5px;"></i>GLib Notes</a>

            <div class="w3-display-topmiddle">
                <a href="home.php"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-black">Home</a>
                <a href="upload_notes.php"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-black">Upload
                    Notes</a>
                <a href="search_notes.php"
                    class="w3-bar-item w3-button w3-hover-none w3-text-red w3-border-white  w3-hover-border-black">Search
                    Notes</a>
            </div>
            <div class="w3-right w3-margin-right">
                <button type="button" class="w3-button w3-margin-right w3-border-teal w3-round-large w3-border"><a
                        href="logout.php" style="text-decoration: none;">Log Out</a></button>
            </div>
        </div>
        <div class="w3-containe w3-center" style="margin-top: 7rem;">
            <form action="" method="post">
                <input type="text" class="w3-margin-top w3-padding-16" style="height: 35px;padding-left: 10px;"
                    width="100px" placeholder="Enter Keyword..." name="search" required>
                <button class="w3-bar-item w3-button w3-teal w3-round" name="submit" type="submit"
                    style="height: 39px;margin-bottom: 5px;">Go</button>
            </form>
            <?php
            if(isset($_REQUEST['submit']))
            {
                $search = strtoupper($_REQUEST['search']);
                include 'connection.php';
                $sql = "SELECT * FROM tbl_uploads WHERE keyword='$search'";
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
                if($count >= 1) {
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($rows as $row) {
                        $pdf = $row['uploaded_file'];
                        $uploaded = $row['uploaded_date'];
                        echo "$pdf - $uploaded";
                        echo "<button class='w3-bar-item w3-button w3-teal w3-round' name='show' type='submit'>Show</button>";
                        ?>
            <iframe src="<?php echo "uploads_images/".$pdf; ?>" width="90%" height="500px" tyle="border:none;">
            </iframe><br>
            <?php
                    }
                }
            }
            ?>
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