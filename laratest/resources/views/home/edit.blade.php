<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<h1>Edit user page</h1>

	<form method="post" action="/home/edit/{{$users->id}}">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="{{$users->username}}">@error('username'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$users->password}}">@error('password'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="ename" value="{{$users->ename}}">@error('ename'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="cname" value="{{$users->cname}}">@error('cname'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value="{{$users->phone}}">@error('phone'){{$message}}@enderror</td>
			</tr>

			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{$users->type}}">
				@error('type'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>