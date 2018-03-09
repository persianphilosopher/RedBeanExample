<?php include TPL."skel/meta.php";?>
	<table width='80%'>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Email</td>
		<td>Update</td>
		<td>Delete</td>
	</tr>
<?php
    foreach( $users as $user) {
        echo ("<tr><td>".$user['name']."</td>");
        echo ("<td>".$user['email']."</td>");
        echo ("<td><a href='edit/".$user['id']."'>edit</a></td>");
        echo ("<td><a href='delete/".$user['id']."'>delete</a></td></tr>");
    }
    ?>
    <a href="add">Add user</a>

<?php include TPL."skel/rx.php";?>
