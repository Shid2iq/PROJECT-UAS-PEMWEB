@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Review film</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">review</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body" style=" background-color:rgb(107, 117, 125);">
            <form method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')
                <label for="movies_id" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Movies_id :</label><br>
                <input type="text" class="form-control" id="movies_id" name="movies_id" value="{{ $review->movies_id }}"><br><br>

                <label for="users_id" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Users_id :</label><br>
                <input type="text" class="form-control" id="users_id" name="users_id" value="{{ $review->users_id }}"><br><br>

                <label for="date" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Date :</label><br>
                <input type="date" class="form-control" id="date" name="date" value="{{ $review->date }}"><br><br>

                <label for="description" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Description :</label><br>
                <input type="text" class="form-control" id="description" name="description" value="{{ $review->description }}"><br><br>

                <label for="rating" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Rating :</label><br>
                <input type="float" class="form-control" id="rating" name="rating" value="{{ $review->rating }}"><br><br>

                <input type="submit" class="btn btn-success px-5 text-uppercase mb-5 w-100 mt-2 text-light" value="Update review">
            </form>
        </div>
    </div>
@endsection