<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
   

    $bid=$_POST['bid'];
    $bname=$_POST['bname'];
    
    
       $query = "INSERT INTO building VALUES('$bid','$bname')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: buildadd.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: buildadd.php');


       }
   
    

}

    

//Edit

if(isset($_POST['edit_btn']))
    {
        $dcode=$_POST['edit_build'];
        echo $build;
    }

    
    
    //Update

    if(isset($_POST['updbtn']))
    {
        
        $bid = $_POST['edit_bid'];
        $bname = $_POST['edit_bname'];
      
        $query = "UPDATE building SET bname='$bname' WHERE bid='$bid'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['success']="Update Successfully";
            header('location:builddetails.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:builddetails.php');

        }
    }




    //Delete

    if(isset($_POST['deletedata']))
    {
        $bid = $_POST['delete_id'];
        echo $build;
        $query = "DELETE FROM building where bid='$bid'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['success']="Deleted Successfully";
            header('location:builddetails.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:builddetails.php');

        }
       

    }
    



?>