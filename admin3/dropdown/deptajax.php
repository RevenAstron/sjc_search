<?php

if(!empty($_POST["data"])){
$dept=$_POST["data"];	
echo $dept;
}
?>



else{
					$query1 =mysqli_query($con,"SELECT * FROM stud where CLASS in (SELECT pname from program where dcode='$prog')");
					if(mysqli_num_rows($query1) > 0)
				   {
					?>
				<table>
						<tr> <?php 
						while($row1=mysqli_fetch_array($query1))
						{
				 					echo $row1['NAME'];
						} ?>
						</tr>
				</table>

			<?php } else echo "no records"; } ?>