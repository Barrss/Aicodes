<?php
	$name=$_POST['name'];
	$age=$_POST['age'];
	$city=$_POST['city'];

	echo "Name-SUBMITTED : $name <br>";

	echo "Age-SUBMITTED : $age <br>";

	echo "Gender-SUBMITTED: $gender";

	echo "Email-SUBMITTED: $Email";
?>

<!DOCTYPE html>
<html>

<body>
	<h2 style="color:green">inFluAI</h2>
	<b>Submit form details</b>

	<form id="form__submit" action="form.php" method="post">
		<label>Full Name: </label><br />
		<input type="text" name="name" /><br />
		<label>Age:</label><br />
		<input type="number" name="age" /><br />
		<label>Gender:</label><br />
		<input type="text" name="gender" /><br /><br />
        <label>Email:</label><br />
		<input type="text" name="Email" /><br /><br />
		<a href="#" onclick="submitForm()">Submit</a>
	</form>

	<script>
		function submitForm() {
			let form = document.getElementById("form__submit");
			form.submit();
		}
	</script>
</body>

</html>
