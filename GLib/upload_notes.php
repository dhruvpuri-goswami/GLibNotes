<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        $email=$_SESSION['username'];
        if(isset($_REQUEST['submit']))
        {
            $filename = $_FILES["fileToUpload"]["name"];
            $tempname = $_FILES["fileToUpload"]["tmp_name"];    
            $folder = "uploads_images/";
            $notes_name = $_REQUEST['name'];
            $notes_desc = $_REQUEST['desc'];
            $notes_keyword = strtoupper($_REQUEST['keyword']);
            date_default_timezone_set("Asia/Kolkata");
			$date = date("Y-m-d");
            include 'connection.php';
            $sql = "SELECT * FROM tbl_user WHERE user_name='$email'";
            $result = mysqli_query($conn,$sql);
            $rows = mysqli_fetch_assoc($result);
            $user_id = $rows['user_id'];

            $sql1 = "INSERT INTO tbl_uploads (user_id, uploaded_file, keyword, file_name, file_description, uploaded_date) 
            VALUES ('$user_id', '$filename', '$notes_keyword', '$notes_name', '$notes_desc', '$date')";
            if (mysqli_query($conn, $sql1)) 
            {
                if (move_uploaded_file($tempname, $folder.$filename)) 
                {
                    sleep(2);
                    echo '<script>
                        alert("Notes Uploaded Successfully Successfully...");
                        </script>';
                }
                else {
                    sleep(2);
                    echo '<script>alert("Something Went Wrong...")</script>';
                }
            }
            else {
                sleep(2); 
                echo '<script>alert("Something Went Wrong...")</script>';
            }
        }
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
                <a href="home.php"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-black">Home</a>
                <a href="#"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white w3-text-red w3-hover-border-black">Upload
                    Notes</a>
                <a href="search_notes.php"
                    class="w3-bar-item w3-button w3-hover-none w3-border-white  w3-hover-border-black">Search Notes</a>
            </div>

            <div class="w3-right w3-margin-right">
                <button type="button" class="w3-button w3-margin-right w3-border-teal w3-round-large w3-border"><a
                        href="logout.php" style="text-decoration: none;">Log Out</a></button>
            </div>
        </div>
        <div class="w3-container">
            <table>
                <form style="margin-top: 7rem;" action="" method="POST" enctype="multipart/form-data">
                    <tr>
                        <td><label for="file_name">Notes Name</label></td>
                        <td>: </td>
                        <td><input type="text" class="w3-margin w3-padding" style="padding-left: 10px;" width="100px"
                                placeholder="Enter File Name" name="name" required></td>
                    </tr>
                    <tr>
                        <td><label for="file_description">Notes Description</label></td>
                        <td>: </td>
                        <td><textarea class="w3-margin w3-padding" rows="3" cols="21"
                                placeholder="Enter File Description" name="desc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="keyword">Keyword</label></td>
                        <td>: </td>
                        <td><input type="text" class="w3-margin w3-padding" style="padding-left: 10px;" width="100px"
                                placeholder="Enter Keyword" name="keyword" required></td>
                    </tr>
                    <tr>
                        <td><label for="file">Upload Notes</label></td>
                        <td>: </td>
                        <td><input type="file" class="w3-margin w3-padding" width="100px" name="fileToUpload" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            <button type="submit" name="submit">Submit</button>
                        </td>
                    </tr>
                </form>
            </table>
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