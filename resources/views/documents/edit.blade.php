@extends('layouts.app') 

@section('content')
<div class="container">
    <h1>Edit document</h1>
    <br>
    <form method="POST" action="/documents/{{ $document->id }}">
        @csrf 
        @method('PATCH')
        <div>
            <input
                type="text"
                name="title"
                placeholder="title"
                value="{{ $document->title }}"
                required
            />
        </div>
        <hr>
        <div>
            <button type="submit">Update document</button>
        </div>
    </form>
    <br>
    <form method="POST" action="/documents/{{ $document->id }}">
        @csrf 
        @method('DELETE')
        <div>
            <button type="submit">Delete document</button>
        </div>
    </form>
</div>
@endsection()