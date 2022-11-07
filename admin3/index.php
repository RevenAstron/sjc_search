<?php
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="container-fluid px-4">


     <h1 class="mt-4">ADMIN</h1>
     
     <ol class="breadcrumb mb-4">

        
     </ol>

</div>

<div class="row" style="margin: 40px 50px;">

<div class="col-x1-3 col-md-6 nb-4">
     <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
               <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Student</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                              require 'dbconfig.php';
                              $query = "SELECT DNO FROM stud ORDER BY DNO";
                              $query_run = mysqli_query($con,$query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h1> '.$row.'</h1>';
                            ?>
                           

                         </div>
                    </div>
                    <div class="co1-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="col-x1-3 col-md-6 nb-4">
     <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
               <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Faculty</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                              require 'dbconfig.php';
                              $query = "SELECT fid FROM staff ORDER BY fid";
                              $query_run = mysqli_query($con,$query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h1> '.$row.'</h1>';
                            ?>
                           

                         </div>
                    </div>
                    <div class="co1-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="col-x1-3 col-md-6 nb-4" style="margin-top:26px">
     <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
               <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Department</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                              require 'dbconfig.php';
                              $query = "SELECT dcode FROM department ORDER BY dcode";
                              $query_run = mysqli_query($con,$query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h1> '.$row.'</h1>';
                            ?>
                           

                         </div>
                    </div>
                    <div class="co1-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="col-x1-3 col-md-6 nb-4" style="margin-top:26px">
     <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
               <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Programs</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                              require 'dbconfig.php';
                              $query = "SELECT pname FROM program ORDER BY pname";
                              $query_run = mysqli_query($con,$query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h1> '.$row.'</h1>';
                            ?>
                           

                         </div>
                    </div>
                    <div class="co1-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
               </div>
          </div>
     </div>
</div>

</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');


?>