<h2>Overview of the Rollercoasters</h2>

<table>
    <tr>
        <th>Rollercoaster Names</th>
    </tr>

    <?php foreach($rollercoasters as $rollercoaster): ?>
	<tr>
		<td><?php echo $this->Html->link($rollercoaster['Rollercoaster']['coasterName'],
        			array('action'=>'view', $rollercoaster['Rollercoaster']['coasterName'])); ;?></td>

	</tr>
    <?php endforeach; ?>
</table>
