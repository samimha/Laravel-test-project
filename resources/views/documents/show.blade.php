@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $document->title }}</h1>
    
    <a href="/documents/{{ $document->id }}/edit">Edit</a>

</div>
@endsection()