<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<h1>Delete user page</h1>

	<form method="post"  >
		@csrf
		<table border="1">
			<tr>
				<td>Company Name </td>
				<td>{{$user['companyname']}}</td>
			</tr>

			<tr>
				<td>Title </td>
				<td>{{$user['title']}}</td>
			</tr>
			<tr>
				<td>Location </td>
				<td>{{$user['location']}}</td>
			</tr>
			
		</table>
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
</body>
</html>