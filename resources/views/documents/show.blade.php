@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $document->title }}</h1>
    
    @can('update', $document)
    <a href="/documents/{{ $document->id }}/edit">Edit</a>
    @endcan

    <hr>
    <a href="/documents">Back to documents</a>
</div>
@endsection()