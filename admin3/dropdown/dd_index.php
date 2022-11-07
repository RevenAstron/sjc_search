<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		  <script>
function getdepartment(val) {
	$.ajax({
	type: "POST",
	url: "get_program.php",
	data:'dept_id='+val,
	success: function(data){
		$("#program-list").html(data);
	}
	});
	$.ajax({
	type: "POST",
	url: "progformdata.php",
	data:{data:val},
	success: function(data){
		$("#prog").html(data);
	}
	});
}

function getprogram(val) {
	$.ajax({
	type: "POST",
	url: "progformdata.php",
	data:{data1:val},
	success: function(data){
		$("#prog").html(data);
	}
	});
}
// function selectCountry(val) {
// $("#search-box").val(val);
// $("#suggesstion-box").hide();
// }
</script>	
	</head>
	<body>


		<form name="insert" action="" method="post" >
  <table border="0">
  <tr>
  	<thead>
    <th>Department :</th><th> </th>
    <th>Program :</th>
  </thead>
  <tbody>
    <td>
    		<select onChange="getdepartment(this.value)"  name="dept" id="dept" class="form-control" >
            <option value="">Select</option>
                 <?php $query =mysqli_query($con,"SELECT * FROM department");
						while($row=mysqli_fetch_array($query))
						{ ?>
						<option value="<?php echo $row['DCODE'];?>"><?php echo $row['DNAME'];?></option>
						<?php
						}
						?>
        </select></td><td width="30"></td>
  
    
    	<td>
    			<select onChange="getprogram(this.value);" name="progr" id="program-list" class="form-control">
								<option value="">Select</option>
					</select>
			</td>
			<td>
				<div id='prog'>
				<?php if(isset($_POST["databtn"])) 
							{
									$prog=null;
									$prog1=null;

									if($_POST["program"]!=null) 
									{
											$prog=$_POST["program"];
											echo "prog:".$prog." "; 
									}
									if($_POST["program1"]!=null) 
									{
											$prog1=$_POST["program1"];
											echo "prog1:".$prog1; 
									}

							} ?> 
				</div>
			</td>
	</tbody>
 	</tr>
</table>
<?php

?>



<?php

if(isset($_POST["databtn"])) 
{
	if($prog!='null')
	{
		$query1 =mysqli_query($con,"SELECT * FROM stud WHERE CLASS IN (SELECT pname FROM program WHERE dcode='$prog')");
?>
		<table class="table table-bordered" id="datatable" width="300%" cellspacing="20">
			<tr><?php
					if(mysqli_num_rows($query1) > 0)
			   	{ 
						while($row1=mysqli_fetch_array($query1))
							{
							 ?> <td><?php echo $row1['NAME']; ?></td>
							<?php 
							} 
					}?>
			</tr>
		</table>
<?php
		} else {
					$query1 =mysqli_query($con,"SELECT * FROM stud WHERE CLASS='$prog1'");
?>
		<table class="table table-bordered" id="datatable" width="300%" cellspacing="20">
			<tr><?php
					if(mysqli_num_rows($query1) > 0)
			   	{ 
						while($row1=mysqli_fetch_array($query1))
							{
							 ?> <td><?php echo $row1['NAME']; ?></td>
							<?php 
							} 
					}  else "error";?>
			</tr>
		</table>
<?php 	}
		}?>


     </form>
 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>