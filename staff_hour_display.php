<?php 
       
        if ($shift==1) {
         $sql = "SELECT * from schedule where hour='$period' AND day_order='$dayo' AND fid='$fid'";
      } else if ($shift==2) {
         $sql = "SELECT * from schedule1 where hour='$period' AND day_order='$dayo' AND fid='$fid'";
      }
                
                            $hr1 = $conn->query($sql);
                          if($hr1->num_rows > 0) {

                            $row1 = $hr1->fetch_assoc();

                            $room=$row1["room_no"];

                            $fid = $row1['fid'];
                            $sql1 = "SELECT fname from staff where fid='$fid'";
                            $hr2 = $conn->query($sql1);
                            $row2 = $hr2->fetch_assoc();

                            $scode = $row1['sub_code'];
                            $sql2 = "SELECT sub_name from subject where sub_code='$scode'";
                            $hr3 = $conn->query($sql2);
                            $row3 = $hr3->fetch_assoc();

                            $sql3 = "SELECT rname from room where room_no='$room'";
                            $hr4 = $conn->query($sql3);
                            $row4 = $hr4->fetch_assoc();

                            echo "<div class='carddis'>
                            <h6 class='cardtxt'>COURSE:</h6> 
                            <h6 class='cardtxt11'>".$row3["sub_name"]."</h6>
                          </div> 

                           <div class='carddis'>
                            <h6 class='cardtxt' style='width:110px'>CLASS : HANDLING</h6> 
                            <h6 class='cardtxt12'>".$row1["class_name"]."</h6>
                          </div>

                          <div class='carddis'>
                            <h6 class='cardtxt'>ROOM NO : </h6> 
                            <h6 class='cardtxt11'>".$room."</h6>
                          </div>

                          <div class='carddis'>
                            <h6 class='cardtxt'>ROOM : </h6> 
                            <h6 class='cardtxt13'>".$row4["rname"]."</h6>
                          </div> ";
                        }else{
                            echo "<div class='carddis'>
                            <h6 class='cardtxt' style='margin-top:65px; margin-left:24px'>COURSE: </h6> 
                            <h6 class='cardtxt1' style='color:gray; margin-top:65px'>No classes</h6>
                          </div> ";
                          }
          ?>



