<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<h1>Edit user page</h1>

	<form method="post" action="/employeer/edit/{{$users->id}}">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="companyname" value="{{$users->companyname}}">@error('companyname'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="{{$users->title}}">@error('title'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="{{$users->location}}">@error('location'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="{{$users->salary}}">@error('salary'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>