<!DOCTYPE html>
<html>
<head>
	<title>Add new project</title>
</head>
<body>
	<div>
		</ul>
		<form action="{{url('/projects')}}" method='POST'>
			{{csrf_field()}}
			<label>Name</label>
			<input type="text" name="project_name"><br>
			<label>City</label>
			<input type="text" name="city">
			<button type='submit'>Add project</button>
		</form>
	</div>
</body>
</html>