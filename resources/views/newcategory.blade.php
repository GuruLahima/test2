<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
</head>
<body>
	<div>
		<form action="{{url('/projects/'.Request::segment(2).'/category')}}" method='POST'>
			{{csrf_field()}}
			<input type="text" name="name">
			<input type="hidden" name="project_id" value='{{Request::segment(2)}}'>
			<button type='submit'>Add category</button>
		</form>
	</div>
</body>
</html>