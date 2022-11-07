<html>

<body>



<?php

include 'conn.php';

if( isset($_POST["search"])){
  if(($_POST["search"])){

date_default_timezone_set("Asia/Calcutta");
// echo date("d/m-l-h:i:sa");

$search = $_POST['search'];

$sql = "SELECT * FROM room 
where rname like '%$search%' OR room_no like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
$row = $result->fetch_assoc();

    $room=$row["room_no"];
    $class=$row['rname'];



                      if($room > 0){
                      $imgresult = "SELECT * from image where id='$room' OR class_name='$class' ";
                      $result = $conn->query($imgresult);
                        $row = $result->fetch_assoc();
                          echo "<center><img class='bigimg' data-enlargable width='80%' height='80%'' src='{$row['img_dir']}'></center>";
                          
                      }
                      else{
                        echo "Image: No record";
                      }


}}

}




?>

</body>

</html>
