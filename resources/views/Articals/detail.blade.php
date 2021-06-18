@extends('layouts.app')

@section('content')
<h1>{{ $artical->title }}</h1>

<h3>Content</h3>

<p>{{ $artical->contents }}</p>

<a href="{{ route('baiviet.edit', $artical) }}">edit</a>
<form action="{{ route('baiviet.destroy', $artical->id) }}" method="POST">
	@csrf
	@method('delete')
	<button type="submit">delete</button>
</form>
@endsection