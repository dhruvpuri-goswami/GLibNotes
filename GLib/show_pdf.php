<?php
        include 'connection.php';
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM tbl_uploads WHERE u_id='$id'";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_assoc($result);
        $pdf=$rows['uploaded_file'];
    ?>
<iframe src="<?php echo "uploads_images/".$pdf; ?>" width="100%" height="100%" style="border:none;">
</iframe><br>