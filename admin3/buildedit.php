<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit building details
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $bid=$_POST['edit_bid'];
        

        $query = "SELECT * FROM building where bid='$bid' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="crud_build.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>Building ID</label>
            <input type="text" name="edit_bid" value="<?php echo $row['bid'] ?>" class="form-control" placeholder="Enter building id">
        </div>
        <div class="form-group">
            <label>Building name</label>
            <input type="text" name="edit_bname" value="<?php echo $row['bname'] ?>" class="form-control" placeholder="Enter Building name eg.Administrative block">
        </div>
        

            <a href="builddetails.php" class="btn btn-danger" >Cancel</a>
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