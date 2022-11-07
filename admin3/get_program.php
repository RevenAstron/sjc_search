<?php
require_once("dbconfig.php");

if(!empty($_POST["dept_id"])) 
{
$query =mysqli_query($con,"SELECT * FROM program WHERE dcode = '" . $_POST["dept_id"] . "'");
?>

<option value="">Select Program</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["pname"]; ?>"><?php echo $row['pname'];?></option>
<?php

}
}
?>

