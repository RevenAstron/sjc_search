<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['updbtn']))
    {
        
        $date=$_POST['edit_date'];       
        $day_order=$_POST['edit_do'];

        $query = "UPDATE `calender` SET `day_order`='$day_order' WHERE date='$date'";
        $query_run = mysqli_query($con,$query);
        
}
?>