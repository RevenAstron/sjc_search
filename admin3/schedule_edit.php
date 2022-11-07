<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Schedule details
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $sid=$_POST['edit_sid'];

        $query = "SELECT * FROM schedule where sid ='$sid' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="crud_schedule.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>Schedule ID</label>
            <input type="text" name="edit_sid" value="<?php echo $row['sid'] ?>" class="form-control" placeholder="Enter Sid (day_order+hour+class_name)">
        </div>
        <div class="form-group">
            <label>Day order</label>
            <input type="text" name="edit_do" value="<?php echo $row['day_order'] ?>" class="form-control" placeholder="Enter Day order">
        </div>
        <div class="form-group">
            <label>Hour</label>
            <input type="text" name="edit_hour" value="<?php echo $row['hour'] ?>"   class="form-control" placeholder="Enter hour">
        </div>
        <div class="form-group">
            <label>Class name</label>
            <input type="text" name="edit_cn" value="<?php echo $row['class_name'] ?>"   class="form-control" placeholder="Enter class name">
        </div>
        <div class="form-group">
            <label>Room no</label>
            <input type="text" name="edit_rn" value="<?php echo $row['room_no'] ?>"   class="form-control" placeholder="Enter Room no">
        </div>
        <div class="form-group">
            <label>Subject code</label>
            <input type="text" name="edit_subc" value="<?php echo $row['sub_code'] ?>"   class="form-control" placeholder="Enter subject code">
        </div>
        <div class="form-group">
            <label>Faculty ID</label>
            <input type="text" name="edit_fid" value="<?php echo $row['fid'] ?>"   class="form-control" placeholder="Enter Faculty id">
        </div>
            <a href="schedule_details.php" class="btn btn-danger" >Cancel</a>
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