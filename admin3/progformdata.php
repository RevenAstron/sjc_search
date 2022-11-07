
<form action="dd_index.php" method="POST" style="display: none;">
    <div>

	  <?php

	  		$prog=null;
	  		$prog1=null;

			if(!empty($_POST["data"])) 
			{
				$prog=$_POST["data"]; ?>
				<div class="form-group">
           			<input type="hidden" name="program" class="form-control" value="<?php echo $prog ?>">
        		</div> <?php
			} else { ?>
				<div class="form-group">
           			<input type="hidden" name="program" class="form-control" value=null>
        		</div> <?php
			}



			if(!empty($_POST["data1"])) 
			{
				$prog1=$_POST["data1"]; ?>
				<div class="form-group">
           			<input type="hidden" name="program1" class="form-control" value="<?php echo $prog1 ?>">
        		</div> <?php
			} else { ?>
				<div class="form-group">
           			<input type="hidden" name="program1" class="form-control" value=null>
        		</div> <?php
			}
			?>
             
    </div>
    
	<div>
	    <button type="Submit" name="databtn" class="btn btn-primary" style="margin-left:20px">Submit </button>
	</div>
</form>