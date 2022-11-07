
<?php



include 'conn.php';

if( isset($_POST["search"])){
  if(($_POST["search"])){

    echo" <div class='col-md-3.3'>
                          <div class='card p-2 mb-1 studcard'>
                              <div class='d-flex justify-content-between'>
                                <div style='width: 600px; height: 50px;'>";

date_default_timezone_set("Asia/Calcutta");
// echo date("d/m-l-h:i:sa");

$search = $_POST['search'];

$sql = "SELECT * FROM stud 
where DNO like '%$search%' or NAME like '%$search%' or CLASS like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
$row = $result->fetch_assoc();
  echo " 

  <div style='justify-content: space-around; display: flex; color:black'>
    <h4 class='stud_main_txt'>".$row["DNO"]."</h4>

    <h4 class='stud_main_txt'>".$row["NAME"]."</h4>

    <h4 class='stud_main_txt'>".$row["CLASS"]."</h4>
  </div> ";
}

else{
  echo "no records";
}

        echo "
                                </div>
                              </div>
                            </div>
                      </div> 



              <div class='container mt-5 mb-3'>

                  <div class='row'>

                      <div class='col-md-3.3'>
                          <div class='card p-2 mb-1 excard'>
                              <div class='d-flex justify-content-between'>
                                <div style='width: 250px; height: 180px;'>";
                                  



$result = $conn->query($sql);


if ($result->num_rows > 0){
$row = $result->fetch_assoc();
 
 
    $class=$row["CLASS"];
    $shift=$row["SHIFT"];

    $date=date('d');

    $time = date('Hi');

        $sql1 = "SELECT * FROM calender where date='$date'";
            $hr = $conn->query($sql1);
            if ($hr->num_rows > 0){
            $row = $hr->fetch_assoc();

            $dayo=$row["day_order"];
            $hour=null;


     include 'hour.php';

              if($dayo!=0 && $hour!=null){
                $phour=$hour-1;

            echo 'Previous<br>';
            echo "<h6 style='position:absolute;color:red; right:30px; font-weight:bold; margin-top:-22px'>Hour: ". $phour."</h6>";

                      if ($hour==1){
                           echo "Classes not yet started ";
                           	}


           ////////////////////////////////////////PERIOD 2/////////////////////////////////////
                          else if ($hour==2){
                            $period=1;
                           include 'stud_hour_display.php';
                      }





           ////////////////////////////////////////PERIOD 3/////////////////////////////////////
                          else if ($hour==3){
                            $period=2;
                           include 'stud_hour_display.php';
                      }





           ////////////////////////////////////////PERIOD 4/////////////////////////////////////
                          else if ($hour==4){
                            $period=3;
                           include 'stud_hour_display.php';
                      }

           ////////////////////////////////////////PERIOD 5/////////////////////////////////////



                          else if ($hour==5){
                            $period=4;
                           include 'stud_hour_display.php';
                      }

                      else{
                            echo "<div class='carddis'>
                            <h6 class='cardtxt'>COURSE: </h6> 
                            <h6 class='cardtxt1' style='color:gray'>No Records</h6>
                          </div> ";

                      }



/////////////////////////////////card 2///////////////////////////////


echo "


                                </div>
                              </div>
                          </div>
                      </div>

                      <div class='col-md-4'>
                          <div class='card p-3 mb-2 excard1'>
                              <div class='d-flex justify-content-between'>
                                   <div style='width: 600; height: 200px;'>";
                             






            echo 'Current';

            echo "<h6 style='position:absolute;color:red; right:30px; font-weight:bold; margin-top:-22px'>Hour: ". $hour."</h6>";
            echo "<p class='cardtop'></p>";
  
                ///////////////////////////// hour 1////////////////////////////////////

                      if ($hour==1){
                            $period=1;
                           include 'stud_hour_display.php';
                        }



           ////////////////////////////////////////PERIOD 2/////////////////////////////////////
                          else if ($hour==2){
                            $period=2;
                           include 'stud_hour_display.php';
                      }



           ////////////////////////////////////////PERIOD 3/////////////////////////////////////
                          else if ($hour==3){
                            $period=3;
                           include 'stud_hour_display.php';
                      }



           ////////////////////////////////////////PERIOD 4/////////////////////////////////////
                          else if ($hour==4){
                            $period=4;
                           include 'stud_hour_display.php';
                      }

           ////////////////////////////////////////PERIOD 5555/////////////////////////////////////



                          else if ($hour==5){
                            $period=5;
                           include 'stud_hour_display.php';
                      }

                      else{
                            echo "<div class='carddis'>
                            <h6 class='cardtxt'>COURSE: </h6> 
                            <h6 class='cardtxt1' style='color:gray'>No Records</h6>
                          </div> ";

                      }




/////////////////////card 3///////////////////////////////////



                      echo "
      </div>
                                  </div>
                              </div>
                          </div>

                         <div class='col-md-3.3'>
                              <div class='card p-2 mb-1 excard'>
                                  <div class='d-flex justify-content-between'>
                                    <div style='width: 250px; height: 180px;'>";
                                      



            echo 'Next<br>';
           $phour=$hour+1;
         echo "<h6 style='position:absolute;color:red; right:30px; font-weight:bold; margin-top:-22px'>Hour: ". $phour."</h6>";

          //////////////////////////////////// PERIOD 1 //////////////////////////////
                      if ($hour==1){
                            $period=2;
                           include 'stud_hour_display.php';
                        }



           ////////////////////////////////////////PERIOD 2/////////////////////////////////////
                          else if ($hour==2){
                            $period=3;
                           include 'stud_hour_display.php';
                      }



           ////////////////////////////////////////PERIOD 3/////////////////////////////////////
                          else if ($hour==3){
                            $period=4;
                           include 'stud_hour_display.php';
                      }





           ////////////////////////////////////////PERIOD 4/////////////////////////////////////
                          else if ($hour==4){
                            $period=5;
                           include 'stud_hour_display.php';
                      }

           ////////////////////////////////////////PERIOD 6/////////////////////////////////////



                          else if ($hour==5){
                           echo "Classes ends";
                      }

                      else{
                            echo "<div class='carddis'>
                            <h6 class='cardtxt'>COURSE: </h6> 
                            <h6 class='cardtxt1' style='color:gray'>No Records</h6>
                          </div> ";

                      }
                    }else{
                      echo "No records";
                    }


}}

echo "
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>  
  <!-- End of Content Wrapper -->";

}
}


?>

 





                       

