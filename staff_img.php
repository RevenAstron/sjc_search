<html>

<body>



<?php

include 'conn.php';

if( isset($_POST["search"])){
  if(($_POST["search"])){

date_default_timezone_set("Asia/Calcutta");
// echo date("d/m-l-h:i:sa");

$search = $_POST['search'];

$sql = "SELECT * FROM staff 
where fid like '%$search%' or fname like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
$row = $result->fetch_assoc(); 
 
    $fid=$row["fid"];
    $shift=$row["shift"];

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

           ////////////////////////////////////////PERIOD 1/////////////////////////////////////
                      if ($hour==1){
                            $sql = "SELECT * from schedule where hour='1' AND day_order='$dayo' AND fid='$fid'";
                            $hr1 = $conn->query($sql);
                             if($hr1) {
                                    $row1 = $hr1->fetch_assoc(); 
                                      if($row1){ 
                                        $room=$row1["room_no"];
                                      }
                                      else{
                                        $room = null;
                                      }
                        } }




           ////////////////////////////////////////PERIOD 2/////////////////////////////////////
                          else if ($hour==2){
                            $sql = "SELECT * from schedule where hour='2' AND day_order='$dayo' AND fid='$fid'";
                            $hr1 = $conn->query($sql);
                            if($hr1) {
                                    $row1 = $hr1->fetch_assoc(); 
                                      if($row1){ 
                                        $room=$row1["room_no"];
                                      }
                                      else{
                                        $room = null;
                                      }
                      } }





           ////////////////////////////////////////PERIOD 3/////////////////////////////////////
                          else if ($hour==3){
                            $sql = "SELECT * from schedule where hour='3' AND day_order='$dayo' AND fid='$fid'";
                            $hr1 = $conn->query($sql);
                             if($hr1) {
                                    $row1 = $hr1->fetch_assoc(); 
                                      if($row1){ 
                                        $room=$row1["room_no"];
                                      }
                                      else{
                                        $room = null;
                                      }

                      } }





           ////////////////////////////////////////PERIOD 4/////////////////////////////////////
                          else if ($hour==4){
                            $sql = "SELECT * from schedule where hour='4' AND day_order='$dayo' AND fid='$fid'";
                            $hr1 = $conn->query($sql);
                             if($hr1) {
                                    $row1 = $hr1->fetch_assoc(); 
                                      if($row1){ 
                                        $room=$row1["room_no"];
                                      }
                                      else{
                                        $room = null;
                                      }

                           
                      } }

           ////////////////////////////////////////PERIOD 5/////////////////////////////////////



                          else if ($hour==5){
                            $sql = "SELECT * from schedule where hour='4' AND day_order='C' AND fid='$fid'";
                            $hr1 = $conn->query($sql); 
                                if($hr1) {
                                    $row1 = $hr1->fetch_assoc(); 
                                      if($row1) { 
                                        $room=$row1["room_no"];
                                      }
                                      else {
                                        $room = null;
                                      }

                                } else {
                                    echo "Something has gone wrong! ";
                                }
                          }

                    ///////////////////////////////////////////////////////////
                          

                          else{
                              $room = null;
                            }
                    } else{
                      $room = null;
                      }
                    




                      if($room > 0){
                      $imgresult = "SELECT * from image where id='$room'";
                      $result = $conn->query($imgresult);
                        $row = $result->fetch_assoc();
                          echo "<center><img class='bigimg' data-enlargable width='80%' height='80%'' src='{$row['img_dir']}'></center>";
                          
                      }
                      else{
                        echo "Image: No record";
                      }


}}

}
}



?>

</body>

</html>
