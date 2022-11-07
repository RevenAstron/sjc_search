<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Faculty Profile
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $dno=$_POST['edit_fid'];
        

        $query = "SELECT * FROM staff where fid='$fid' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="code.php" method="POST">
    <div class="form-group" style="display: none;">
            <label>Faculty ID</label>
            <?php echo $row['fid']; ?>
            <input type="text" name="edit_fid" value="<?php echo $row['fid'] ?>" class="form-control" placeholder="Enter ID">
        </div>
        
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="edit_fname" value="<?php echo $row['fname'] ?>"   class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Department code</label>
            <input type="text" name="edit_dcode" value="<?php echo $row['DCODE'] ?>"   class="form-control" placeholder="Enter dcode">
        </div>
            <a href="facultydetails.php" class="btn btn-danger" >Cancel</a>
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