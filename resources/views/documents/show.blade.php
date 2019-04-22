@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $document->title }}</h1>
    
    <a href="/documents/{{ $document->id }}/edit">Edit</a>
    <hr>
    <a href="/documents">Back to documents</a>
</div>
@endsection()