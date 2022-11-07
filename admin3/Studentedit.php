<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Student Profile
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $dno=$_POST['edit_dno'];
        

        $query = "SELECT * FROM stud where DNO='$dno' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="code.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>D.NO</label>
            <input type="text" name="edit_dno" value="<?php echo $row['DNO'] ?>" class="form-control" placeholder="Enter DNO">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="edit_sname" value="<?php echo $row['NAME'] ?>" class="form-control" placeholder="Enter Name">
        </div>
        
        <div class="form-group">
            <label>Class</label>
            <input type="text" name="edit_class" value="<?php echo $row['CLASS'] ?>"   class="form-control" placeholder="Enter class (II MCA)">
        </div>
        <div class="form-group">
            <label>Shift</label>
            <input type="text" name="edit_shift" value="<?php echo $row['SHIFT'] ?>"   class="form-control" placeholder="Enter Shift (1/2)">
        </div>
            <a href="studetails.php" class="btn btn-danger" >Cancel</a>
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