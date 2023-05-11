@extends('layouts.app')

@section('page.main')
    
    <div class="d-flex">
        <ul class="list-group">
            @foreach ($comics as $comic)
            <li class="list-group-item"><h4>{{ $comic->title }}</h4></li>
            
            <li class="list-group-item">{{ $comic->artists }}</li>
            <li class="list-group-item"><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">bottone</a></li>
            <li class="list-group-item"></li>
            @endforeach
        </ul>
    </div>
   
@endsection