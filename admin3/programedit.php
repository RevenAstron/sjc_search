<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Program details
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $pname=$_POST['edit_pname'];
        

        $query = "SELECT * FROM program where pname='$pname' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="crud_program.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>Program name</label>
            <input type="text" name="edit_dno" value="<?php echo $row['pname'] ?>" class="form-control" placeholder="Enter Program name">
        </div>
        <div class="form-group">
            <label>Department code</label>
            <input type="text" name="edit_dcode" value="<?php echo $row['dcode'] ?>" class="form-control" placeholder="Enter Department code">
        </div>
        
        
        <div class="form-group">
            <label>Shift</label>
            <input type="text" name="edit_shift" value="<?php echo $row['shift'] ?>"   class="form-control" placeholder="Enter Shift (1/2)">
        </div>
            <a href="programdetails.php" class="btn btn-danger" >Cancel</a>
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