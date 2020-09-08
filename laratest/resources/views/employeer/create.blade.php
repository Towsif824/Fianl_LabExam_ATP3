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
				<td>Company Name</td>
				<td><input type="text" name="companyname">@error('companyname'){{$message}}@enderror</td>
				
			</tr>
			<tr>
				<td>Job Title</td>
				<td><input type="text" name="title"> @error('title'){{$message}}@enderror</td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location">  @error('location'){{$message}}@enderror</td>
				
			</tr>
			<tr>
				<td>salary</td>
				<td><input type="text" name="salary"> @error('salary'){{$message}}@enderror</td>
				
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>