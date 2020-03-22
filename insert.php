	
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Insert data in Database</title>
	</head>
	<body>
	
	<form action="insert_php.php" method="post" name="form" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td>Select Picture:</td>
			<td><input type="file" name="file" /></td>
		</tr>
		<tr>
		    <td></td>
			<td>
			<input type="submit" value="submit" name="submit">
			<input type="reset" name="reset" />
			</td>
		</tr>
		<tr>
		    <td></td>
			<td>
			<div id="show"></div>
			</td>
		</tr>
	</table>
	</form>
	<script type="text/javascript">

	</script>
	
		
	</body>
	</html>