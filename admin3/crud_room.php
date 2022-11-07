<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
   

    $bid=$_POST['bid'];
    $room=$_POST['room'];
    $rname=$_POST['rname'];
    
    
       $query = "INSERT INTO room VALUES('$bid','$room','$rname')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: roomadd.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: roomadd.php');


       }
   
    

}

    

//Edit

if(isset($_POST['edit_btn']))
    {
        $dcode=$_POST['edit_room'];
        echo $room;
    }

    
    
    //Update

    if(isset($_POST['updbtn']))
    {
        
        $bid = $_POST['edit_bid'];
        $room = $_POST['edit_room'];
        $rname = $_POST['edit_rname'];
      
        $query = "UPDATE room SET bid='$bid',rname='$rname' WHERE room_no='$room'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['success']="Update Successfully";
            header('location:roomdetails.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:roomdetails.php');

        }
    }




    //Delete

    if(isset($_POST['deletedata']))
    {
        $room = $_POST['delete_id'];
        echo $room;
        $query = "DELETE FROM room where room_no='$room'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['success']="Deleted Successfully";
            header('location:roomdetails.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:roomdetails.php');

        }
       

    }
    



?>