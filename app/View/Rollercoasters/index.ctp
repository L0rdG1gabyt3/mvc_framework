<h2>Overview of the Rollercoasters</h2>

<?php
	
	foreach($rollercoasters as $rollercoaster){
		//pr($rollercoaster);
		
		echo $rollercoaster['Rollercoaster']['coasterName'];
	}
	
?>