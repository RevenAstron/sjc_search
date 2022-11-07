<?php
session_start();
include('includes/header.php');

?>

<div class="modal fade" id="addscheduledetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Add Class schedule</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="crud_schedule.php" method="POST">
      <div class="modal-body">

     
        
        <div class="form-group">
            <label>Schedule ID</label>
            <input type="text" name="sid" class="form-control" placeholder="Sid (day_order+hour+class_name) eg.a12mca  a/1/2mca">
        </div>
        <div class="form-group">
            <label>Day order</label>
            <input type="text" name="do" class="form-control" placeholder="Enter Day order (A/B)">
        </div>
        <div class="form-group">
            <label>Hour</label>
            <input type="text" name="hour" class="form-control" placeholder="Enter hour (1/2)">
        </div>
        <div class="form-group">
            <label>Class name</label>
            <input type="text" name="cn"   class="form-control" placeholder="Enter class name (II MCA/ I BSC CS)">
        </div>
        <div class="form-group">
            <label>Room no</label>
            <input type="text" name="rn" class="form-control" placeholder="Enter Room no (ab202)">
        </div>
        <div class="form-group">
            <label>Subject code</label>
            <input type="text" name="subc" class="form-control" placeholder="Enter subject code (21PCA3CC01)">
        </div>
        <div class="form-group">
            <label>Faculty ID</label>
            <input type="text" name="fid" class="form-control" placeholder="Enter Faculty id (CS1DR)">
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
        <h6 class="m-0 font-weight-bold text-primary"><a href="schedule_details.php">Schedule details</a> 
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addscheduledetails">
           Add class schedule
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