<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<h1>Delete user page</h1>

	<form method="post" border="1">
		@csrf
		<table>
			<tr>
				<td>UserName</td>
				<td>{{$user['username']}}</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>{{$user['password']}}</td>
			</tr>
			
		</table>
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
</body>
</html>