@extends('layouts.app')

@section('page.main')
<form action="{{route('comics.store')}}" method="POST">
    <div class="form-row">
        @csrf
        <div class="form-group col-md-6">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="form-group col-md-6">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" placeholder="Description" name="description"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="thumb">Insert img url</label>
        <input type="text" class="form-control" id="thumb" placeholder="Url" name="thumb">
    </div>
    <div class="form-group">
        <label for="price">Address 2</label>
        <input type="text" class="form-control" id="price" placeholder="Ex. $10.99" name="price">
    </div>
  
    <div class="form-group col-md-6">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="form-group col-md-4">
        <label for="sale-date">Sale Date</label>
        <input type="text" class="form-control" id="sale-date" name="sale_date">
    </div>
    <div class="form-group col-md-2">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Insert type">
    </div>
    <div class="form-group col-md-2">
        <label for="artists">Artists</label>
        <input type="text" class="form-control" id="artists" name="artists" placeholder="Insert artists">
    </div>
    <div class="form-group col-md-2">
        <label for="writers">Writers</label>
        <input type="text" class="form-control" id="writers" name="writers" placeholder="Insert writers">
    </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
    
@endsection