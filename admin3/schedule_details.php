<?php
session_start();
include('includes/header.php');
include 'dbconfig.php';
    
    $max=5;
    $query=mysqli_query($con,"SELECT count(sid) from `schedule`");
    $row = mysqli_fetch_row($query);

include('pagination.php');
?>





<div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Class schedule Details <a href="schedule_add.php">Add new schedule</a></h5>

         <button class="btn btn-secondary" onclick="myFunction(this);toggleText(this)"><div>List view</div></button>

            <?php   include 'dd_index.php'; ?>


</div>

<?php
        if(isset($_SESSION['success'])&& $_SESSION['success'] !='')
        {
            echo '<h2 class="bg-info-primary ">' .$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }

        if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
        {
            echo '<h2 class="bg-info-danger ">' .$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }

        ?>

<div id="myDiv" class="table-responsible">
        <?php
        if(isset($_POST["databtn"])) 
        {
        if($prog1!='null')
            {
            $query ="SELECT * FROM schedule where class_name='$prog1' ORDER BY class_name, day_order, hour";
            $nquery = mysqli_query($con,$query);
         
        ?>

        <table class="table table-bordered" id="datatable" width="300%" cellspacing="20">
            <thead>
                <tr>
                    <th>Schedule ID</th>
                    <th>Day order</th>    
                    <th>Hour</th>
                    <th>Class name</th>
                    <th>Room no</th>
                    <th>Subject code</th>
                    <th>Faculty ID</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php

               

                if(mysqli_num_rows($nquery) > 0)
                {
                    while($row = mysqli_fetch_assoc($nquery))
                    {
                        ?>

                <tr>
                    <td><?php  echo $row['sid']; ?></td>
                    <td><?php  echo $row['day_order']; ?></td>
                    <td><?php  echo $row['hour']; ?></td>
                    <td><?php  echo $row['class_name']; ?></td>
                    <td><?php  echo $row['room_no']; ?></td>
                    <td><?php  echo $row['sub_code']; ?></td>
                    <td><?php  echo $row['fid']; ?></td>
                    <td>
                        <form action="schedule_edit.php" method="post">
                           <input type="hidden" name="edit_sid" value="<?php echo $row['sid'];?>">
                           <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                        </form>
                    </td>
                    <td>
                        <!-- Delete modal -->
                        <button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                        </button></td></tr>

                        
                       <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="crud_schedule.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
                        
                
                <?php

                    }

                }
                else{
                    echo "No Record found";
                }}}
                ?>
                
            </tbody>
        </table>
        </div>

<div id="myDiv2" style="display:none">
<?php include 'schedule_display.php'; ?>
</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });


               function myFunction() {
  var x = document.getElementById("myDiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
var y = document.getElementById("myDiv2");
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }

}
function toggleText(event)
{
    var text = event.textContent || event.innerText;
    if(text == 'List view')
    {
      event.innerHTML = 'Table view';
    }
    else
    {
      event.innerHTML = 'List view';   
    }
}
    </script>





<?php
include('includes/footer.php');
include('includes/scripts.php'); 


?>


