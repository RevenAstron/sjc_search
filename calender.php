<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MAPit SJC</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

          <link rel="stylesheet" href="css/stylesheet.css">
     <link rel="stylesheet" href="css/preloader.css">

  <style type="text/css">
        .h6{
            color: white;
            background-color: steelblue;
            width: 40px;
        }
        .sun{
            background-color: steelblue;
        }
    </style>
</head>
 

<body id="page-top">

  <div id="preloader"><div class="loading wave">
  SJC
</div>
    </div>

    <!-- <script>

        setTimeout(load, 1000);
      var loader = document.getElementById("preloader");
           function load(){
                loader.style.display = "none";  
        }
    </script> -->

    <script>
      var loader = document.getElementById("preloader");
           window.addEventListener("load", function(){
                loader.style.display = "none";  
        })
    </script>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" style="margin:10px 0 30px 0;" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="logo-m.png" width="40" />
                </div>
                <div class="sidebar-brand-text mx-1" style="margin-top: 10px;">St.Joseph's<br>College</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="map.php">
                    <i class="fa fa-map"></i>
                    <span>MAP</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php">
                    <i class="fas fa-user"></i>
                    <span>STUDENT</span>
                </a>

                   <a class="nav-link collapsed" href="faculty.php">
                    <i class="fas fa-users"></i>
                    <span>FACULTY</span>
                </a>

                   <a class="nav-link collapsed" href="building.php">
                    <i class="fas fa-building"></i>
                    <span>CLASS</span>
                </a>
                <a style="color: white; font-size: 20px;" class="nav-link collapsed" href="building.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i style="color: white; font-size: 20px;" class="fa fa-calendar"></i>
                    <span>CALENDER</span>
                </a>
              
            </li>

         
            
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" style="margin-left: 280px;" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary" >
                                    <i class="fas fa-search fa-sm"></i></button>
                                
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search" method="POST">
                                    <div class="input-group">
                                        <input type="text" name='search' class="form-control bg-light border-0 small"
                                            placeholder="Search for..." >
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->







                <!-- Begin Page Content -->
                <div class="container-fluid" >


                  <div id="clockdate">
                    <?php
date_default_timezone_set("Asia/Bangkok");

?>
  <div class="clockdate-wrapper">
    <p style="position: absolute;margin-top: 6px; color: white;">Day<br>
        <?php
            include 'conn.php';
            $date=date('d');

        $sql1 = "SELECT * FROM calender where date='$date'";
            $hr = $conn->query($sql1);
            if ($hr->num_rows > 0){
            $row = $hr->fetch_assoc();

            $dayo=$row["day_order"];
         echo "<strong>".$dayo."</strong>";
         } ?></p>
    <div style="border-left: 2px solid rgba(255, 255, 255, 0.2);margin-top: 9px;margin-left: 40px;position: absolute;height: 40px;"></div>
    <div id="clock" style="margin-left: 23px"></div>
    <div id="date" style="margin-left: 30px"></div>
  </div>
</div>

                    <!-- Page Heading -->
                    <div style="flex-direction: column;" class="d-sm-flex align-items-center justify-content-between mb-4">

<!--                    

-->

              <div class="col-md-5 img">

                    





                  <!--   <img class="bigimg" data-enlargable width="100%" src="scc2.jpg" /> -->
                  </div><br>




                 
                      


<?php  
$lastdate = strtotime(date("Y-m-t"));
// Day of the last date
$date = date("d", $lastdate);
$i=1;

$day = date('D',strtotime("first day of this month"));


switch ($day) {
  case "Sun":
    $daynum=0;
    break;
  case "Mon":
    $daynum=1;
    break;
  case "Tue":
    $daynum=2;
    break;
   case "Wed":
    $daynum=3;
    break;
  case "Thu":
    $daynum=4;
    break;
  case "Fri":
    $daynum=5;
    break;
  case "Sat":
    $daynum=6;
    break;
}
?>

<h2 align="center" style="color: gray;">
        <?php $datetime = DateTime::createFromFormat('d/m/Y', date('d/m/Y'));
    echo $datetime->format('F').' '.date('Y');?>
    </h2>
    <br /> <?php

$con = mysqli_connect("localhost","root","","visual");

?>  <table bgcolor="lightgrey" align="center" 
        cellspacing="15" cellpadding="15">
  
        <thead>
            <tr style="color: white; background: purple;">
               
            <th>Sun</th> <th>Mon</th> <th>Tue</th> <th>Wed</th> 
            <th>Thu</th> <th>Fri</th> <th>Sat</th>
            </tr>
        </thead>
  
        <tbody style="text-align: center; color: black;"> <?php

 $query = "SELECT * FROM `calender`";
       $nquery = mysqli_query($con,$query);
         if(mysqli_num_rows($nquery) > 0)
                {
                     ?><tr><?php  for($i=1; $i<=$date; $i++){
                       
                             if($i<=$daynum){ 
                                echo '<td></td>';
                                 $date++;
                                } else{
                                     while($row = mysqli_fetch_assoc($nquery))
                                    {
                                    if($i%7==0){
                                       echo '<td>'.$row['date']."<h6 class='h6'>".$row['day_order'].'</h6></td></tr><tr>'; 
                                       $i++;
                                   }
                                   else if(($i-1)%7==0){
                                       echo "<td class='sun'>".$row['date']."<h6 class='h6'>".$row['day_order'].'</h6></td>'; 
                                       $i++;
                                   }
                                    else {
                                       echo '<td>'.$row['date']."<h6 class='h6'>".$row['day_order'].'</h6></td>'; 
                                       $i++;
                                    }                               
                                 }
                    }
               }?></tr><?php
          }
     ?>
    </table>
    
</div>



    
    <!-- End of Page Wrapper -->










    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

     <script type="text/javascript">
        $('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div>').css({
        background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        position:'fixed',
        zIndex:'10000',
        top:'0', left:'0',
        cursor: 'zoom-out'
    }).click(function(){
        $(this).remove();
    }).appendTo('body');
});
      </script> 


        <script type="text/javascript">
                                      function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
startTime();
                                        </script>

</body>

</html>