<?php
session_start();
include('includes/header.php');

?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit room details
        </h6>
    </div>
    <div class="card-body">

<?php

$con = mysqli_connect("localhost","root","","visual");
    if(isset($_POST['edit_btn']))
    {
        $room=$_POST['edit_room'];
        

        $query = "SELECT * FROM room where room_no='$room' ";
        $query_run = mysqli_query($con,$query);

        foreach($query_run as $row)
        {
            ?>

            
    <form action="crud_room.php" method="POST">
        <div class="form-group" style="display: none;">
            <label>Room no</label>
            <input type="text" name="edit_room" value="<?php echo $row['room_no'] ?>" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Building id</label>
            <input type="text" name="edit_bid" value="<?php echo $row['bid'] ?>" class="form-control" placeholder="Enter building id eg.ab">
        </div>
        
        
        <div class="form-group">
            <label>Room name</label>
            <input type="text" name="edit_rname" value="<?php echo $row['rname'] ?>"   class="form-control" placeholder="Enter room name eg.I MCA">
        </div>
            <a href="roomdetails.php" class="btn btn-danger" >Cancel</a>
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