<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
    $fname=$_POST['fname'];
    $fid=$_POST['fid'];
    $dcode=$_POST['dcode'];
    
    
       $query = "INSERT INTO staff(fid,fname,DCODE)VALUES ('$fid','$fname','$dcode')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: Facultyadd.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: Facultyadd.php');


       }
   
    

}
    



?>