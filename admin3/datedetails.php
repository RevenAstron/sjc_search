<?php
session_start();
include('includes/header.php');
include 'dbconfig.php';
    


?>

<head>
    <style type="text/css">

.switch-block {
  width: 300px;
  border-color:none;
}

.switch-toggle input {
    width: 0px;
    visibility: hidden;
}

h5 {
  margin-bottom: 5px;
}
.h6{
    color: white;
    background-color: steelblue;
    text-align: center;
    width: 30px;
}
.sun{
    background-color: limegreen;
}
    </style>
</head>
<body>


<div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Day order Details   &#160<a style="margin-left: 15px;" href="Studentadd.php"></a></h5>

 <button class="btn btn-secondary" onclick="myFunction(this);toggleText(this)"><div>Auto fill</div></button>



</div>


<div id="myDiv">
<form action="datedetails.php" method="POST">
      <div class="modal-body">

     
        
        <div class="form-group">
            <label>Enter starting dayorder on 1st</label>
            <input type="text" name="do1" class="form-control" placeholder="Enter dayorder eg.A">
        </div>
        <div class="form-group">
            <label>Enter all the dates having leave in the month as comma seperated values</label>
            <input type="text" name="ldates" class="form-control" placeholder="Enter dates: eg(1,4,6,31)">
        </div>
        <div class="modal-body">
        <button style="margin-right: 70px;" type="Submit" name="regbtn" class="btn btn-primary">Set </button></div><div class="modal-footer">
      </div>
  </div>
    </form>

<?php
// Last date of current month.
$lastdate = strtotime(date("Y-m-t"));
// Day of the last date
$date = date("d", $lastdate);

if(isset($_POST['regbtn']))
{
    if($_POST['do1']!=null){
    $do=$_POST['do1'];
   } else $do='A';
    $string=$_POST['ldates'];

//$string = "2,3,4,5,9,15,16,22,23,24,25,30"; 
$str = preg_split ("/\,/", $string); 


$az =ord($do);
$i=1;

$day = date('D',strtotime("first day of this month"));


switch ($day) {
  case "Sun":
    $daynum=0;
    break;
  case "Mon":
    $daynum=1;
    break;
  case "Tue":
    $daynum=2;
    break;
   case "Wed":
    $daynum=3;
    break;
  case "Thu":
    $daynum=4;
    break;
  case "Fri":
    $daynum=5;
    break;
  case "Sat":
    $daynum=6;
    break;
}


?>
<h2 align="center" style="color: orange;">
        <?php $datetime = DateTime::createFromFormat('d/m/Y', date('d/m/Y'));
    echo $datetime->format('F').' '.date('Y');?>
    </h2>
    <br />

    <table bgcolor="lightgrey" align="center" 
        cellspacing="21" cellpadding="21">
  
        <thead>
            <tr  style="color: white; background: purple;">
               
            <th>Sun</th> <th>Mon</th> <th>Tue</th> <th>Wed</th> 
            <th>Thu</th> <th>Fri</th> <th>Sat</th>
            </tr>
        </thead>
  
        <tbody style="text-align: center;">
<?php
$j=1;
$arr=null;
$arr1=null; ?>
            <tr>
              
  <?php


while($i<=$date){
    if($i<=$daynum){
        echo '<td></td>';
        $date++;
    } else{

        if($i%7==0){
            if (in_array($j, $str)){
                echo '<td>'.$j.'<h6>&#160</h6></td></tr><tr>';
                $arr[$j]=$j;
                $arr1[$j]=' ';
                $j++;
            } else {
                    if($az!=71){
                        echo '<td>'.$j."<h6 class='h6'>".chr($az).'</h6></td></tr><tr>';
                        $arr[$j]=$j;
                        $arr1[$j]=chr($az);
                        $az++;
                        $j++;
                    } else {
                        $az=65;
                        $i--;
                    }
            }
        }
        else {
            if (in_array($j, $str)){
                 echo '<td>'.$j.'<h6>&#160</h6></td>';
                 $arr[$j]=$j;
                 $arr1[$j]=' ';
                 $j++;
            } else {
                    if($az!=71){
                        echo '<td>'.$j."<h6 class='h6'>".chr($az).'</h6></td>';
                        $arr[$j]=$j;
                        $arr1[$j]=chr($az);
                        $az++;
                        $j++;
                    } else {
                        $az=65;
                        $i--;
                    }
            }
        }
}$i++;
}
}
?>      
            </tr>
<tr>

  <?php 

if(isset($_POST['regbtn']))
{
    ?>
    <form action="datedetails.php" method="POST">
         <div class="modal-body" style="display:none">

     
        
        <div class="form-group">
            
            <input type="text" name="j" class="form-control" value="<?php echo $j ?>">
            <?php foreach($arr as $value)
{
    echo '<input type="hidden" name="result[]" value="'. $value. '">';
} ?>
            <?php foreach($arr1 as $value1)
{
    echo '<input type="hidden" name="result1[]" value="'. $value1. '">';
} ?>
        </div> </div>

            <button style="margin-left: 25px;" type="Submit" name="submit" class="btn btn-primary">Submit </button>

 </form>
<?php }
    $con = mysqli_connect("localhost","root","","visual");
if(isset($_POST['submit']))
{
    $j=$_POST['j'];
    $arr=$_POST['result'];
    $arr1=$_POST['result1'];

    for ($i=0; $i < $j-1; $i++) { 
        $query = "UPDATE calender SET day_order='$arr1[$i]' WHERE date='$arr[$i]'";
       $query_run = mysqli_query($con,$query);

       
   }
   if ($query_run) {
           echo "<h4>Updated successfully</h4>";
       }
   }
?>
</tr>
        </tbody>
    </table>

</div>

<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
<div id="myDiv2" style="display:none; width: 30%; text-align: center; margin: auto;">
    <br>
<div class="table-responsible">
        
        <?php
          
          



        ?>
        <table class="table table-bordered" id="datatable" width="300%" cellspacing="20">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Day order</th>   

                </tr>
            </thead>
            <tbody>
                <?php

                $nquery=mysqli_query($con,"SELECT * from `calender`");

                if(mysqli_num_rows($nquery) > 0)
                {
                    while($row = mysqli_fetch_assoc($nquery))
                    {
                        ?>

                <tr>
                    <td><?php  echo $row['date']; ?></td>
                    <td><?php  echo $row['day_order']; ?></td>
                    <td>
                        <form action="date_edit.php" method="post">
                           <input type="hidden" name="edit_date" value="<?php echo $row['date'];?>">

                           <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                        </form>
                    </td></tr>

                        
                   <?php

                    }

                }
                else{
                    echo "No Record found";
                }
                ?>
                
            </tbody>
        </table>



    
</div>
</div>

    <footer style="height:90px">
        
    </footer>






        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function myFunction() {
  var x = document.getElementById("myDiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
var y = document.getElementById("myDiv2");
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }

}
function toggleText(event)
{
    var text = event.textContent || event.innerText;
    if(text == 'Auto fill')
    {
      event.innerHTML = 'Manual';
    }
    else
    {
      event.innerHTML = 'Auto fill';   
    }
}

    </script>



<?php
include('includes/footer.php');
include('includes/scripts.php'); 


?>

</body>