@extends('layouts.master')

@section('content')
	<form action="{{route('create.Article')}}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Name...">
		<input type="text" name="description" placeholder="Description...">
		<textarea name="content" id="" cols="30" rows="5" placeholder="Content..."></textarea>
		<select name="category_id" id="">
			@foreach($list as $value)
				<option value="{{$value['id']}}">{{$value['name']}}</option>
			@endforeach
		</select>
		<input type="submit" name="submit" value="Create Article">
	 </form>
@endsection