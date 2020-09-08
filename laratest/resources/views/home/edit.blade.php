<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<h1>Edit user page</h1>

	<form method="post" action="/home/edit/{{$users->userId}}">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="{{$users->username}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$users->password}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{$users->type}}"></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$users->name}}"></td>
			</tr>
			
			<tr>
				<td>Dept</td>
				<td><input type="text" name="dept" value="{{$users->dept}}"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="{{$users->cgpa}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>