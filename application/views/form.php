<main>
	<form action="<?=base_url('grade/insert');?>" method="post">
		<table>
			<tr>
				<td><label for="code">Code: </label></td>
				<td><input type="text" name="code" id="code"><br></td>
			</tr>
			<tr>
				<td><label for="subject_name">Subject Name: </label></td>
				<td><input type="text" name="subject_name" id="subject_name"><br></td>
			</tr>
			<tr>
				<td><label for="credit">Credit: </label></td>
				<td><input type="text" name="credit" id="credit"><br></td>
			</tr>
			<tr>
				<td><label for="grade">Grade: </label></td>
				<td><input type="text" name="grade" id="grade"><br></td>
			</tr>
			<tr>
				<td colspan="2"><center>
				<input type="submit">
				<input type="reset"></center>
				</td>
			</tr>
		</table>
	</form>

	</main>
