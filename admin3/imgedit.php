<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit image
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $dno=$_POST['edit_dno'];
        

        $query = "SELECT * FROM image where id='$dno' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="code_img.php" method="POST" enctype="multipart/form-data" name="imgupld" onsubmit="return validateForm()">
        <div class="form-group" style="display: none;">
            <label>Image id</label>
            <input type="text" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control" placeholder="Enter image id">
        </div>
        <div class="form-group">
            <label>Class name</label>
            <input type="text" name="edit_name" value="<?php echo $row['class_name'] ?>" class="form-control" placeholder="Enter class name">
        </div>
        
        <div class="form-group">
            <label><strong>Class: </strong></label>
            <label>Select Image File to Upload:</label>
            <input type="file" name="file">
        </div>
            <a href="imgdetails.php" class="btn btn-danger" >Cancel</a>
            <button type="submit" name="updbtn" class="btn btn-primary"> Update </button>
        </form>

        <?php

        }
    }

?>

        
     
   
    </div>
   </div>
</div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');


?>