<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Subject details
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $subc=$_POST['edit_subc'];
        

        $query = "SELECT * FROM subject where sub_code='$subc' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="crud_sub.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>Subject code</label>
            <?php echo $row['sub_code'] ?>
            <input type="text" name="edit_subc" value="<?php echo $row['sub_code'] ?>" class="form-control" placeholder="Enter code">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="edit_sn" value="<?php echo $row['sub_name'] ?>" class="form-control" placeholder="Enter Name">
        </div>
        
       
            <a href="sub_details.php" class="btn btn-danger" >Cancel</a>
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