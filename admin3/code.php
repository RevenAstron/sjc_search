<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
   
    $sname=$_POST['sname'];
    $dno=$_POST['dno'];
    $class=$_POST['class'];
    $shift=$_POST['shift'];
    
    
       $query = "INSERT INTO stud(NAME,DNO,CLASS,SHIFT)VALUES ('$sname','$dno','$class','$shift')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: Studentadd.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: Studentadd.php');


       }
   
    

}

    

//Edit

if(isset($_POST['edit_btn']))
    {
        $sname=$_POST['edit_sname'];
        echo $sname;
    }

    
    
    //Update

    if(isset($_POST['updbtn']))
    {
        
        $sname = $_POST['edit_sname'];
        $dno = $_POST['edit_dno'];
        $class = $_POST['edit_class'];
        $shift = $_POST['edit_shift'];
      
        $query = "UPDATE stud SET NAME='$sname',CLASS='$class',SHIFT='$shift' WHERE DNO='$dno'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['success']="Update Successfully";
            header('location:studetails.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:studetails.php');

        }
    }




    //Delete

    if(isset($_POST['deletedata']))
    {
        $dno = $_POST['delete_id'];

        $query = "DELETE  FROM stud where DNO='$dno'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['success']="Deleted Successfully";
            header('location:studetails.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:studetails.php');

        }
       

    }
    



?>