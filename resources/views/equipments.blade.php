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
				<form action="{{url('projects/customDestroy/'.$project_id.'/'.$equipment->id)}}" method='post'>
					{{csrf_field()}}
					{{ method_field('DELETE') }}
					<input type="hidden" value="{{$equipment->id}}" name="equipment_id" />
				    <input type="submit" value="Delete equipment"/>
				</form>
			<br>
		@endforeach
		</ul>
		<form action='{{url("/projects")}}' method='POST'>
			{{csrf_field()}}
			<input type="text" name="tools">
			<input type="hidden" value="{{$project_id}}" name="project_id" />
			<button type='submit'>Add equipment</button>
		</form>
	</div>
</body>
</html>