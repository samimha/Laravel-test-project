@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Documents</h1>
        @foreach ($documents as $document)
            <div>
                <a href="/documents/{{ $document->id }}">
                    {{ $document->title }}
                </a>
            </div>
        @endforeach
        <hr>
        <div >
            <a href="/documents/create">Create new</a>
        </div>
    </div>
@endsection()