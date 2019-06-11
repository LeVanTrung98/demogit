@extends('layouts.master')

@section('content')
	<form action="{{route('update.Article',$list['id'])}}" method="POST">
		@csrf
		@method('PUT')
		<input type="text" name="name" placeholder="Name..." value="{{$list['name']}}">
		<input type="text" name="description" placeholder="Description..." value="{{$list['description']}}">
		<textarea name="content" id="" cols="30" rows="10" >{{$list['content']}}</textarea>
		<select name="category_id" id="">
			@foreach($listC as $value)
				<option value="{{$value['id']}}">{{$value['name']}}</option>
			@endforeach
		</select>
		<input type="submit" name="submit" value="Update Article">
	 </form>
@endsection