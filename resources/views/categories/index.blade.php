@extends('layouts.master')

@section('content')
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Action</th>
		
	</tr>
	@if(!empty($list))
		@foreach($list as $value)
		
			<tr>
					<a href="{{route('click.categories',$value['id'])}}"><td>{{$value['id']}}</td></a>
					<a href="{{route('click.categories',$value['id'])}}"><td>{{$value['name']}}</td></a>
					<td><a href="{{route('click.categories',$value['id'])}}">Click Here</a></td>
			</tr>
				
		@endforeach
	@endif
</table>
@endsection