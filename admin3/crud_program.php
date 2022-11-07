<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
   
    $pname=$_POST['pname'];
    $dcode=$_POST['dcode'];
    $shift=$_POST['shift'];
    
    
       $query = "INSERT INTO program VALUES('$pname','$dcode','$shift')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: programadd.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: programadd.php');


       }
   
    

}

    

//Edit

if(isset($_POST['edit_btn']))
    {
        $sname=$_POST['edit_pname'];
        echo $pname;
    }

    
    
    //Update

    if(isset($_POST['updbtn']))
    {
        
        $pname = $_POST['edit_pname'];
        $dcode = $_POST['edit_dcode'];
        $shift = $_POST['edit_shift'];
      
        $query = "UPDATE program SET dcode='$dcode',shift='$shift' WHERE pname='$pname'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['success']="Update Successfully";
            header('location:programdetails.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:studetails.php');

        }
    }




    //Delete

    if(isset($_POST['deletedata']))
    {
        $pname = $_POST['delete_pname'];

        $query = "DELETE  FROM proram where pname='$pname'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['success']="Deleted Successfully";
            header('location:programdetails.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:programdetails.php');

        }
       

    }
    



?>