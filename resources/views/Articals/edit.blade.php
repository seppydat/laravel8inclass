@extends('layouts.app')

@section('content')
<h1>Edit Artical</h1>
<form action="{{ route('baiviet.update', $artical->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Tieu de:</label>
        <input type="text" name="title" value="{{ $artical->title }}">
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <label for="contents">Content: </label>
        <br>
        <textarea name="contents" cols="30" rows="10">{{ $artical->contents }}</textarea>
        @error('contents')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <input type="submit" value="cap nhat">
    </div>
</form>
@endsection()
