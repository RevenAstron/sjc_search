

<?php
session_start();
include('includes/header.php');
include 'dbconfig.php';

?>

<div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel" style="margin-left: 410px;">Faculty Details</h5>

          <form action="facultydetails.php" method="post" style="display: flex;">
            <select name="dept" id="dept" class="form-control" style="margin-right:20px">
            <option value="">Select</option>
                 <?php $query =mysqli_query($con,"SELECT * FROM department");
                        while($row=mysqli_fetch_array($query))
                        { ?>
                        <option value="<?php echo $row['DCODE'];?>"><?php echo $row['DNAME'];?></option>
                        <?php
                        }
                        ?>
        </select>

                <button type="submit" name="search_btn" class="btn btn-primary">Submit</button>
            </form>
</div>

<div class="table-responsible" style="max-width:97%">
        
        <?php

        if(isset($_POST["search_btn"])) 
        {
        $dept=$_POST['dept'];
        if($dept!=null)
            {

            $query ="SELECT * FROM staff WHERE DCODE='$dept'";
            $query_run = mysqli_query($con,$query);

          



        ?>
        <table class="table table-bordered" id="datatable" cellspacing="0">

            <thead style="border-bottom: 1px; color: black;">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DEPARTMENT CODE</th>
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
                    <td><?php  echo $row['fid']; ?></td>
                    <td><?php  echo $row['fname']; ?></td>
                    <td><?php  echo $row['DCODE']; ?></td>
                    <td>
                        <button type="submit" class="btn btn-success">EDIT</button>
                    </td>
                    <td><button type="submit" class="btn btn-danger">DELETE</button></td>
                </tr>
                <?php

                    }

                }
                else{
                    echo "No Record found";
                }
                ?>
                
            </tbody>
        </table>
    <?php }
} ?>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js" ></script>
<script type="text/javascript">
    $(document).ready(function () {
            $('#datatable').DataTable({
            paging: false,
            ordering: false,
            info: false,
    });
});
     
</script>

<?php
include('includes/footer.php');
include('includes/scripts.php');


?>