<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Department details
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $dcode=$_POST['edit_dcode'];
        

        $query = "SELECT * FROM department where DCODE='$dcode' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="crud_dept.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>Department code</label>
            <input type="text" name="edit_dcode" value="<?php echo $row['DCODE'] ?>" class="form-control" placeholder="Enter Program name">
        </div>
        <div class="form-group">
            <label>Department name</label>
            <input type="text" name="edit_dname" value="<?php echo $row['DNAME'] ?>" class="form-control" placeholder="Enter Department code">
        </div>
        
        
        <div class="form-group">
            <label>Shift</label>
            <input type="text" name="edit_shift" value="<?php echo $row['SHIFT'] ?>"   class="form-control" placeholder="Enter Shift (1/2)">
        </div>
            <a href="deptdetails.php" class="btn btn-danger" >Cancel</a>
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