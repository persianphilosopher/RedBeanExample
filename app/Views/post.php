<?php include TPL."skel/meta.php";?>
	<a href="/">Home</a>
	<br/><br/>
	<form action="" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Senha</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
<?php include TPL."skel/rx.php";?>
