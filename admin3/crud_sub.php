<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
   
    $subc=$_POST['subc'];
    $sn=$_POST['sn'];

    
    
       $query = "INSERT INTO `subject`(`sub_code`, `sub_name`) VALUES ('$subc','$sn')";
       $query_run = mysqli_query($con,$query);

       

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: sub_add.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: sub_add.php');


       }
   
    

}

    

//Edit

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
            header('location:sub_details.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:sub_details.php');

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
            header('location:sub_details.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:sub_details.php');

        }
       

    }
    



?>