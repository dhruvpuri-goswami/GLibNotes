<?php
    session_start();
    if(isset($_SESSION['username']))
    {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "RobotoDraft", "Roboto", sans-serif
    }

    .w3-bar-block .w3-bar-item {
        padding: 16px
    }
    </style>
</head>

<body>

    <!-- Side Navigation -->
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;"
        id="mySidebar">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large w3-center"><img
                src="logo.png" style="width:80%;"></a>
        <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu"
            class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-teal w3-button w3-hover-black w3-left-align"
            onclick="document.getElementById('id01').style.display='block'">Upload Notes <i
                class="w3-padding fa fa-pencil"></i></a>
        <form method="POST" action="" class="w3-containe w3-center w3-bar-item">
            <input type="text" class="w3-margin-top w3-padding-16" style="height: 35px;padding-left: 10px;" width="30%"
                placeholder="Find Your Notes...">
            <input type="submit" class="w3-button w3-teal w3-round" style="height: 39px;margin-bottom: 5px;width:50px;"
                value="GO" name="go">
        </form>

        <a href="#" class="w3-bar-item w3-button w3-display-bottomleft w3-teal"><i
                class="fa fa-remove w3-margin-right"></i>Log Out</a>
    </nav>

    <!-- Modal that pops up when you click on "New Message" -->
    <div id="id01" class="w3-modal" style="z-index:4">
        <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container w3-padding w3-teal">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-red w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
                <h2>Upload Notes</h2>
            </div>
            <div class="w3-panel">
                <label>Topic Name</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text">
                <label>From</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text">
                <label>Subject</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text">
                <input class="w3-input w3-border w3-margin-bottom" style="height:150px"
                    placeholder="What's on your mind?">
                <div class="w3-section">
                    <a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel
                         <i class="fa fa-remove"></i></a>
                    <a class="w3-button w3-light-grey w3-right"
                        onclick="document.getElementById('id01').style.display='none'">Send  <i
                            class="fa fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay effect when opening the side navigation on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="Close Sidemenu" id="myOverlay"></div>



    <!-- Page content -->
    <div class="w3-main" style="margin-left:320px;">
        <div class="w3-bar w3-teal w3-right">
            <a href="#" class="w3-bar-item w3-button w3-mobile">Home</a>
            <a href="#" class="w3-bar-item w3-button w3-mobile">Your Notes</a>
            <a href="#" class="w3-bar-item w3-button w3-mobile">Edit Profile</a>
            <a href="#" class="w3-bar-item w3-button w3-mobile">Log Out</a>

        </div>
        <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top"
            onclick="w3_open()"></i>
        <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right"
            onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>

        <div id="Borge" class="w3-container person">
            <br>
            <img class="w3-round  w3-animate-top" src="/w3images/avatar3.png" style="width:20%;">
            <h5 class="w3-opacity">Subject: Remember Me</h5>
            <h4><i class="fa fa-clock-o"></i> From Borge Refsnes, Sep 27, 2015.</h4>


        </div>

        <script>
        var openInbox = document.getElementById("myBtn");
        openInbox.click();

        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        function myFunc(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-red";
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-red", "");
            }
        }

        openMail("Borge")

        function openMail(personName) {
            var i;
            var x = document.getElementsByClassName("person");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x = document.getElementsByClassName("test");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" w3-light-grey", "");
            }
            document.getElementById(personName).style.display = "block";
            event.currentTarget.className += " w3-light-grey";
        }
        </script>

        <script>
        var openTab = document.getElementById("firstTab");
        openTab.click();
        </script>

</body>

</html>
<?php
    }
    else
    {
        header("location: login.php");
    }
?>