@extends('layouts.app')

@section('content')
<h1>List Articals by Seppy</h1>
<a href="{{ route('baiviet.create') }}">Create New Artical</a>

@foreach($articals as $artical)
	<div>
		<a href="{{ route('baiviet.show', $artical->id) }}">{{ $artical->title }}</a>
	</div>
@endforeach

<div>
    {!! $articals->links() !!}
</div>
@endsection