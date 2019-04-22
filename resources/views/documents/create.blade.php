@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a new document</h1>
    <br />
    <form method="POST" action="/documents">
        @csrf
        <div>
            <input type="text" name="title" placeholder="title" />
        </div>
        <br />
        <div>
            <button type="submit">Create document</button>
        </div>
    </form>
</div>
@endsection()