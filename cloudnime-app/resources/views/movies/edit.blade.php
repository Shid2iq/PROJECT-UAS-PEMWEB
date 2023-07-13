@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
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
            <form enctype="multipart/form-data" method="POST" action="/movies/{{ $movie->id }}">
                @csrf
                @method('PUT')
                <label for="title" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Title:</label><br>
                <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}"><br><br>

                <label for="poster" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Poster:</label><br>
                <img style="width: 200px" src="/assets/img/{{$movie -> poster}}" alt="">
                <input type="file" class="form-control" id="poster" name="poster" value="{{ $movie->poster }}"><br><br>

                <label for="genre_id" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Genre:</label><br>
                <select id="genre_id" class="form-control" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>{{ $genre->name }}</option>
                    @endforeach
                </select><br><br>

                <label for="synopsis" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Synopsis:</label><br>
                <input type="text" class="form-control" id="synopsis" name="synopsis" value="{{ $movie->synopsis }}"><br><br>

                <label for="release_date" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Release_date:</label><br>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $movie->release_date }}"><br><br>

                <label for="countries_id" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Countries_id:</label><br>
                <input type="text" class="form-control" id="countries_id" name="countries_id" value="{{ $movie->countries_id }}"><br><br>

                <label for="rating" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Rating:</label><br>
                <input type="float" class="form-control" id="rating" name="rating" value="{{ $movie->rating }}"><br><br>

                <input type="submit" class="btn btn-success px-5 text-uppercase mb-5 w-100 mt-2 text-light" value="Update Movie">
            </form>
        </div>
    </div>
@endsection