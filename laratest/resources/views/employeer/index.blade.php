<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home!  {{session('username')}}</h1>

	<a href="/home/create">Create User</a> |
	<a href="/logout">logout</a>
	<a href="/employeer/createJob">Add Job</a>
	

	<h2>Job list</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Title</td>
			<td>Location</td>
			<td>salary</td>
			<td>Action</td>
		</tr>

	@foreach( $users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->companyname }}</td>
			<td>{{ $user->title }}</td>
			<td>{{ $user->location }}</td>
			<td>{{ $user->salary }}</td>
			<td>
				<a href="/employeer/edit/{{$user->id}}">Edit</a> |
				<a href="/employeer/delete/{{$user->id}}">Delete</a>
			</td>
		</tr>
	@endforeach
	</table>

</body>
</html>