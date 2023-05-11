@extends('layouts.app')

@section('page.main')
    <div><img src="{{ $comics->thumb }}" alt="" class="..img-fluid" style="height: 200px"></div>
    <div><a href="{{ route('comics.index') }}" class="btn btn-primary">bottone</a></div>
    <h1>{{ $comics->title }}</h1>
    <div>{{ $comics->description }}</div>
@endsection