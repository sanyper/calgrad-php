<main>
	<center><a href="<?=base_url('gpa/form');?>">Add New Grade</a></center>
	<table>
		<th> Code </th><th> Subject </th><th> Credit </th><th>Grade</th><th> Edit </th><th> Delete </th>
		<?php foreach ($grade as $item):?>
			<tr>
				<td><?= $item['subject_code'] ?></td>
				<td><?= $item['subject_name'] ?></td>
				<td><?= $item['credit'] ?></td>
				<td><?= $item['grade'] ?></td>
				<td><a href="<?=base_url('gpa/update');?>/<?=$item['id'];?>">Edit</a></td>
				<td><a href="<?=base_url('gpa/delete');?>/<?=$item['id'];?>">Delete</a></td>
			</tr>
		<?php endforeach;?>
	</table>

	<center>This semester</center>
	<table>
	<th> C.Register </th><th> C.Earn </th><th> CA </th><th>GP</th><th> GPA </th>


	</table>

</main>
