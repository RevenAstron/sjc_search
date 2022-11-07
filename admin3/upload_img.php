
<?php

include 'dbConfig.php';


if(isset($_POST['submit'])){
    $rid=$_POST['rid'];
$class=$_POST['class'];

// File upload path
$targetDir = "../case_study/img/";

$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = ("INSERT into image (id,class_name,img_dir) VALUES ('$rid','$class','img/$fileName')");
            $query_run = mysqli_query($con,$insert);
            if($query_run){
                $_SESSION['success'] = "The file ".$fileName. "has been uploaded successfully";
                header('Location: imgadd.php');
            }else{
                $_SESSION['status'] = "Upload UnSuccess";
                header('Location: imgadd.php');
            } 
        }else{
            $_SESSION['status'] = "Sorry, there was an error uploading your file.";
                header('Location: imgadd.php');
        }
    }else{
        $_SESSION['status'] = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        header('Location: imgadd.php');
    }
}else{
    $_SESSION['status'] = 'Please select a file to upload.';
    header('Location: imgadd.php');
}
}
?>

