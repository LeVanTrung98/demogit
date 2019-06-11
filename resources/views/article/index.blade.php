@extends('layouts.master')

@section('content')
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Content</th>
		<th>Category_ID</th>
		<th>Action</th>
		<th>Action</th>
	</tr>
	@if(!empty($list))
		@foreach($list as $value)
			<tr>
				<td>{{$value['id']}}</td>
				<td>{{$value['name']}}</td>
				<td>{{$value['description']}}</td>
				<td>{{$value['content']}}</td>
				<td>{{$value['category_id']}}</td>
				<td><a href="{{ROUTE('delete.Article',$value['id'])}}">Delete</a></td>
				<td><a href="{{route('edit.Article',$value['id'])}}">Update</a></td>
			</tr>
		@endforeach
	@endif
</table>
<a href="{{route('showCreate.Article')}}">Create Article</a>
@endsection