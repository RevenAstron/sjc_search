<?php
session_start();

$con = mysqli_connect("localhost","root","","visual");

if(isset($_POST['regbtn']))
{
   
    $class_name=$_POST['cn'];
    $sid=$_POST['sid'];
    $day_order=$_POST['do'];
    $hour=$_POST['hour'];
    $room_no=$_POST['rn'];
    $sub_code=$_POST['subc'];
    $fid=$_POST['fid'];
    
    
       $query = "INSERT INTO `schedule`(`sid`, `day_order`, `hour`, `class_name`, `room_no`, `sub_code`, `fid`) VALUES ('$sid','$day_order','$hour','$class_name','$room_no','$sub_code','$fid')";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        
        $_SESSION['success'] = "Register Success";
        header('Location: schedule_add.php');
       }
       else
       {
        
        $_SESSION['status'] = "Register UnSuccess";
        header('Location: schedule_add.php');


       }
   
    

}

    

//Edit

if(isset($_POST['edit_btn']))
    {
        $sid=$_POST['edit_sid'];
        echo $sid;
    }

    
    
    //Update

    if(isset($_POST['updbtn']))
    {
        
        $class_name=$_POST['edit_cn'];
        $sid=$_POST['edit_sid'];
        $day_order=$_POST['edit_do'];
        $hour=$_POST['edit_hour'];
        $room_no=$_POST['edit_rn'];
        $sub_code=$_POST['edit_subc'];
        $fid=$_POST['edit_fid'];
      
        $query = "UPDATE `schedule` SET `day_order`='$day_order',`hour`='$hour',`class_name`='$class_name',`room_no`='$room_no',`sub_code`='$sub_code',`fid`='$fid' WHERE sid='$sid'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['success']="Update Successfully";
            header('location:schedule_details.php');
        }
        else{
            $_SESSION['status']="Update not success";
            header('location:schedule_details.php');

        }
    }




    //Delete

    if(isset($_POST['deletedata']))
    {
        $dno = $_POST['delete_id'];

        $query = "DELETE  FROM schedule where sid='$sid' OR sid='sid'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['success']="Deleted Successfully";
            header('location:schedule_details.php');
        }
        else{
            $_SESSION['status']="Delete not success";
            header('location:schedule_details.php');

        }
       

    }
    



?>