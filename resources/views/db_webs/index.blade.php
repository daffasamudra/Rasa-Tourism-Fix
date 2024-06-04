@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('db_webs.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>content</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($db_webs as $db_web)

				<tr>
					<td>{{ $db_web->id }}</td>
					<td>{{ $db_web->title }}</td>
					<td>{{ $db_web->content }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('db_webs.show', [$db_web->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('db_webs.edit', [$db_web->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['db_webs.destroy', $db_web->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
