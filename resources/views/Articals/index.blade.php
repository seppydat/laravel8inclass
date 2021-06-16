<h1>List Articals by Seppy</h1>

@foreach($articals as $artical)
	<div>
		<a href="{{ route('baiviet.show', $artical->id) }}">{{ $artical->title }}</a>
	</div>
@endforeach

<div>
    {!! $articals->links() !!}
</div>