<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
</head>
<body>
	<div>

		<form action="{{url('/projects/'.Request::segment(2).'/subcategory')}}" method='POST'>
			{{csrf_field()}}
			<select name="category_id">
				@foreach ($categories as $key => $c)
				<option value="{{$c->id}}">{{$c->name}}</option>
				@endforeach
			</select>
			<input type="text" name="name">
			<button type='submit'>Add subcategory</button>
		</form>
	</div>
</body>
</html>