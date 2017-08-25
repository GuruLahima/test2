<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>


			<ol>
			@foreach ($equipment as $key1 =>  	$c)
				<li>{{$c->name}}</li>
				<ul>
					@foreach ($c->subcategories as $key2 => $s)
					<li>{{$s->name}}</li>

					<ul>
					@foreach ($s->equipment as $key3 => $e)
						<li>{{$e->tools}}</li>
					@endforeach
					</ul>
				@endforeach
				</ul>
			@endforeach
			</ol>

		<form action="{{url('/projects/'.Request::segment(2).'/equipment')}}" method='POST'>
			{{csrf_field()}}
			<select name="subcategory_id">
				@foreach ($equipment as $key => $c)
					@foreach ($c->subcategories as $key2 => $s)
						<option value="{{$s->id}}">{{$s->name}}</option>
					@endforeach
				@endforeach
			</select>
			<input type="text" name="tools">
			<button type='submit'>Add equipment</button>
		</form>

		<a href="{{url('/projects/'.Request::segment(2).'/category')}}">Add category</a>
		<a href="{{url('/projects/'.Request::segment(2).'/subcategory')}}">Add subcategory</a>
	</div>
</body>
</html>