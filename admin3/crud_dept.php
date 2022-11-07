<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
   

    $dcode=$_POST['dcode'];
    $Dname=$_POST['pname'];
    $shift=$_POST['shift'];
    
    
       $query = "INSERT INTO department VALUES('$pname','$dcode','$shift')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: deptadd.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: deptadd.php');


       }
   
    

}

    

//Edit

if(isset($_POST['edit_btn']))
    {
        $dcode=$_POST['edit_dcode'];
        echo $dcode;
    }

    
    
    //Update

    if(isset($_POST['updbtn']))
    {
        
        $dcode = $_POST['edit_dcode'];
        $dname = $_POST['edit_dname'];
        $shift = $_POST['edit_shift'];
      
        $query = "UPDATE department SET DNAME='$dname',SHIFT='$shift' WHERE DCODE='$dcode'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['success']="Update Successfully";
            header('location:deptdetails.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:deptdetails.php');

        }
    }




    //Delete

    if(isset($_POST['deletedata']))
    {
        $dcode = $_POST['delete_dcode'];

        $query = "DELETE  FROM department where pname='$dcode'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['success']="Deleted Successfully";
            header('location:deptdetails.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:deptdetails.php');

        }
       

    }
    



?>