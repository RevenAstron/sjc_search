<?php
session_start();
include('includes/header.php');

?>

<div class="modal fade" id="addroomimg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Add Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="upload_img.php" method="POST" enctype="multipart/form-data" name="imgupld" onsubmit="return validateForm()">
      <div class="modal-body">

     
        
        <div class="form-group">
            <label>Room ID: eg. ab202</label>
            <input type="text" name="rid" class="form-control" placeholder="Enter Room id">
        </div>
        <div class="form-group">
            <label>Class name: eg. II MCA</label>
            <input type="text" name="class" class="form-control" placeholder="Enter class">
        </div>
        <div class="form-group">
            <label>Select Image File to Upload:</label>
            <input type="file" name="file">
        </div>

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="submit" class="btn btn-primary">Save </button>
      </div>
    </form>
    
    </div>
  </div>
</div>




<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Image details
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addroomimg">
           Upload image
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
<script type="text/javascript">
    function validateForm() {
  let x = document.forms["imgupld"]["rid"].value;
  if (x == "") {
    alert("Room ID must be filled out");
    return false;
  }
  let y = document.forms["imgupld"]["class"].value;
  if (y == "") {
    alert(" class field must be filled out");
    return false;
  }
}
</script>