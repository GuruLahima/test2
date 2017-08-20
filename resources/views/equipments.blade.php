<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<ul>
		@foreach ($equipmentList as $equipment)
			{{$equipment->tools}}
				<form action="{{url('projects/'.$project_id.'/equipment/'.$equipment->id)}}" method='post'>
					{{csrf_field()}}
					{{ method_field('DELETE') }}
				    <input type="submit" value="Delete equipment"/>
				</form>
			<br>
		@endforeach
		</ul>
		<form action="{{url('/projects/'.$project_id.'/equipment')}}" method='POST'>
			{{csrf_field()}}
			<input type="text" name="tools">
			<button type='submit'>Add equipment</button>
		</form>
	</div>
</body>
</html>