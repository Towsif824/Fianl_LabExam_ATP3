<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
<form method="post">
		
		{{csrf_field()}}
		<table>

			<tr>
				<td>Username</td>
				<td><input type="text" name="username">@error('username'){{$message}}@enderror</td>
				
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"> @error('password'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Employer Name</td>
				<td><input type="text" name="ename">  @error('ename'){{$message}}@enderror</td>
				
			</tr>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="cname"> @error('cname'){{$message}}@enderror</td>
				
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone"> @error('phone'){{$message}}@enderror</td>
				
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type"> @error('type'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>