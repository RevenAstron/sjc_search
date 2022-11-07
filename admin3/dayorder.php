<?php
          $con = mysqli_connect("localhost","root","","visual");
          $query = "SELECT fid,sub_code FROM schedule where class_name='$prog1' AND day_order='$dayo' ORDER BY hour";
          $query_run = mysqli_query($con,$query);
          		// $query = "(SELECT substr(fid, 4) AS fac FROM schedule where class_name='II MCA' AND day_order='C' ORDER BY hour) INTERSECT (SELECT sub_name FROM subject where sub_code in (SELECT sub_code FROM schedule where class_name='II MCA' AND day_order='C' ORDER BY hour))";
         // $query_run2 = mysqli_query($con,$query2);

                if( mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                    	$subc=$row['sub_code'];
                    	$fid=$row['fid'];
                    	$query2 = "SELECT sub_name FROM subject where sub_code='$subc'";
                    	$query_run2 = mysqli_query($con,$query2);
                    	$row2 = mysqli_fetch_assoc($query_run2);

                    	$query3 = "SELECT fname FROM staff where fid='$fid'";
                    	$query_run3 = mysqli_query($con,$query3);
                    	$row3 = mysqli_fetch_assoc($query_run3);
                    			if( mysqli_num_rows($query_run2) > 0)
                {
                        ?>

                    <td><?php  echo $row2['sub_name'].' / '.$row3['fname']; ?></td>

                    <?php
                    		} else{
                    			echo 'No records';
                    		}
                    }

                }                ?>