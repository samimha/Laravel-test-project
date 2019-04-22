@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Documents</h1>
        @foreach ($documents as $document)
            <div>{{ $document->title }}</div>
        @endforeach
    </div>
@endsection()