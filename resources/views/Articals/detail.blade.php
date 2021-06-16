<h1>{{ $artical->title }}</h1>

<h3>Content</h3>

<p>{{ $artical->contents }}</p>

<a href="{{ route('baiviet.edit', $artical) }}">edit</a>
<form action="{{ route('baiviet.destroy', $artical->id) }}">
	@csrf
	@method('delete')
	<button>edit</button>
</form>