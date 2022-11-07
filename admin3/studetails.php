<?php
session_start();
include('includes/header.php');
include 'dbconfig.php';
    


?>





<div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Student Details   &#160<a style="margin-left: 15px;" href="Studentadd.php">Add new student</a></h5>

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

<div class="table-responsible">
        
        <?php

    if(isset($_POST["databtn"])) 
        {
        if($prog!='null')
            {

            $query ="SELECT * FROM stud WHERE CLASS IN (SELECT pname FROM program WHERE dcode='$prog')";
            $query_run = mysqli_query($con,$query);
         
        ?>
        <table class="table table-bordered" id="datatable" width="300%" cellspacing="20">
            <thead>
                <tr>
                    <th>D.NO</th>    
                    <th>Name</th>
                    <th>Class</th>
                    <th>Shift</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>

                <tr>
                    <td><?php  echo $row['DNO']; ?></td>
                    <td><?php  echo $row['NAME']; ?></td>
                    <td><?php  echo $row['CLASS']; ?></td>
                    <td><?php  echo $row['SHIFT']; ?></td>
                    <td>
                        <form action="studentedit.php" method="post">
                            <input type="hidden" name="edit_dno" value="<?php echo $row['DNO'];?>">
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

                <form action="code.php" method="POST">

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
                }
                ?>
                
            </tbody>
        </table>
        </div>
        <?php
        } 
         else if($prog1!='null')
            {
            $query = "SELECT * FROM stud WHERE CLASS='$prog1'";
            $query_run = mysqli_query($con,$query);
            
            ?>
            <table class="table table-bordered" id="datatable" width="300%" cellspacing="20">
            <thead>
                <tr>
                    <th>D.NO</th>    
                    <th>Name</th>
                    <th>Class</th>
                    <th>Shift</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>

                <tr>
                    <td><?php  echo $row['DNO']; ?></td>
                    <td><?php  echo $row['NAME']; ?></td>
                    <td><?php  echo $row['CLASS']; ?></td>
                    <td><?php  echo $row['SHIFT']; ?></td>
                    <td>
                        <form action="studentedit.php" method="post">
                            <input type="hidden" name="edit_dno" value="<?php echo $row['DNO'];?>">
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

                <form action="code.php" method="POST">

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
                }
                ?>
                
            </tbody>
        </table>
        </div>

           <?php } 


        } ?>

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
    </script>





<?php
include('includes/footer.php');
include('includes/scripts.php'); 


?>