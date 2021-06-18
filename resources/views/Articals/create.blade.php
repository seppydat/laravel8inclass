@extends('layouts.app')

@section('content')
<h1>create new artical</h1>
<form action="{{ route('baiviet.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Tieu de:</label>
        <input type="text" name="title">
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <label for="contents">Content: </label>
        <br>
        <textarea name="contents" cols="30" rows="10"></textarea>
        @error('contents')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div>
        <input type="submit" value="dang bai">
    </div>
</form>
@endsection
