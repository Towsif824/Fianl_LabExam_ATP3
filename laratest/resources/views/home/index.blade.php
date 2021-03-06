<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home!  {{session('username')}}</h1>

	<a href="/home/create">Create User</a> |
	<a href="/logout">logout</a> |
	<a href="/employeer/index">Create JOB</a>

	<h2>user list</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>User Name</td>
			<td>Password</td>
			<td>Employer Name</td>
			<td>Company Name</td>
			<td>Contact No</td>
			<td>Type</td>
			<td>Action</td>
		</tr>

	@foreach( $users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->password }}</td>
			<td>{{ $user->ename }}</td>
			<td>{{ $user->cname }}</td>
			<td>{{ $user->phone }}</td>
			<td>{{ $user->type }}</td>
			<td>
				<a href="/home/edit/{{$user->id}}">Edit</a> |
				<a href="/home/delete/{{$user->id}}">Delete</a>
			</td>
		</tr>
	@endforeach
	</table>

</body>
</html>