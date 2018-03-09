<?php include TPL."skel/meta.php";?>

<form action="" method="post" name="form2">
<?php
	echo("Nome:<input type='text' name='name' value='".$users->name."'></input></br>Email:<input type='text' name='email' value='".$users->email."'></input></br>");
?>
<input type="submit" value="send"/>
</form>
<?php include TPL."skel/rx.php";?>

