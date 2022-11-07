<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");


if(isset($_POST['edit_btn']))
    {
        $subc=$_POST['edit_subc'];
        echo $subc;
    }

    
    
    //Update

    if(isset($_POST['updbtn']))
    {
        
        $subc=$_POST['edit_subc'];
        $sn=$_POST['edit_sn'];
      
        $query = "UPDATE `subject` SET `sub_name`='$sn' WHERE sub_code='$subc'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['success']="Update Successfully";
            header('location:imgdetails.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:imgdetails.php');

        }
    }




    //Delete

    if(isset($_POST['deletedata']))
    {
        $subc = $_POST['delete_id'];

        $query = "DELETE FROM subject where sub_code='$subc'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['success']="Deleted Successfully";
            header('location:imgdetails.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:imgdetails.php');

        }
       

    }
    



?>