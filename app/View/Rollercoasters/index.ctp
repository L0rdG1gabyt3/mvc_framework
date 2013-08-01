<h2>Overview of the Rollercoasters</h2>

<?php foreach($rollercoasters as $rollercoaster): ?>
	<tr>
		<td><?php echo $this->Html->link($rollercoaster['Rollercoaster']['coasterName'],
			array('action'=>'view', $rollercoaster['Rollercoaster']['id'])); ;?></td>
		</td>

	</tr>
<?php endforeach; ?>


//<?php

//    foreach ($rollercoasters as $num => $rollercoaster){
//        $c_id = $rollercoaster['Rollercoaster']['coasterId'];
//        echo "</br><h3><a href='CoasterInfo'>{$rollercoaster['Rollercoaster']['coasterName']}</a></h2>";

//    }
//?>

//<?php

//	foreach($rollercoasters as $rollercoaster){
//		pr($rollercoaster);

//		echo $rollercoaster['Rollercoaster']['coasterName'];
//	}

//?>