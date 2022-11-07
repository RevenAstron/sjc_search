<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit day order details
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $date=$_POST['edit_date'];

        $query = "SELECT * FROM calender where date ='$date' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="crud_date.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>Schedule ID</label>
            <input type="text" name="edit_date" value="<?php echo $row['date'] ?>" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Day order</label>
            <input type="text" name="edit_do" value="<?php echo $row['day_order'] ?>" class="form-control" placeholder="Enter Day order">
        </div>
            <a href="datedetails.php" class="btn btn-danger" >Cancel</a>
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