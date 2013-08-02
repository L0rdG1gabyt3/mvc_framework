<h2>Index of All Rollercoasters</h2>

<table>
	<tr>
		<th>Coaster Name</th>

	</tr>
	<?php foreach($rollercoasters as $rollercoaster): ?>
	<tr>
		<td><?php echo $this->Html->link($rollercoaster['Rollercoaster']['coasterName'],
			array('action'=>'view', $rollercoaster['Rollercoaster']['id'])); ;?></td>

	</tr>
	<?php endforeach; ?>
</table>
