<form action="testing.php" method="post">
	<input type="text" name="formMovie" maxlength="50"><br>
	<input type="submit" name="formSubmit" value="Submit">
</form>

<?php

if($_POST['formSubmit'] == "Submit"){
	$varMovie = $_POST['formMovie'];
}

?>