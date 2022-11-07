<?php
session_start();
include('includes/header.php');

?>

<div class="modal fade" id="add_build" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Add buillding Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="crud_build.php" method="POST">
      <div class="modal-body">

     
        
        <div class="form-group">
            <label>Building ID</label>
            <input type="text" name="bid" class="form-control" placeholder="Enter ID eg.ab">
        </div>
        <div class="form-group">
            <label>Building name</label>
            <input type="text" name="bname" class="form-control" placeholder="Enter Building name eg.Chemistry block">
        </div>

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="regbtn" class="btn btn-primary">Save </button>
      </div>
    </form>
    
    </div>
  </div>
</div>



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="deptdetails.php">Building details</a>
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_build">
           Add building details
           </button>
        </h6>
    </div>
    <div class="card-body">

        <?php
        if(isset($_SESSION['success'])&& $_SESSION['success'] !='')
        {
            echo '<h2>' .$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }

        if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
        {
            echo '<h2 class="bg-info">' .$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }

        ?>

        
    </div>
</div>





<?php
include('includes/footer.php');
include('includes/scripts.php');


?>