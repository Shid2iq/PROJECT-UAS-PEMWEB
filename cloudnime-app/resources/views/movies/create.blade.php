@extends('layouts.main')

@section('content')
<head>
    <link href="/https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
</head>
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
            Movies Data
        </div>
        <div class="card-body" style="background-color:rgb(162, 164, 165);">
            <form enctype="multipart/form-data" method="POST" action="/movies">
                @csrf
                <div class="mb-3">
                    <label for="title" class="w-30 text-start fs-3 masthead-heading text-uppercase text-dark">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="poster" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Poster</label>
                    <input type="file" class="form-control" id="poster" name="poster">
                </div>
                <div class="mb-3">
                    <label for="genre" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Genre</label>
                    <select id="genre" class="form-control" name="genre_id" style="text-align: center">
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="synopsis" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Synopsis</label>
                    <input type="text" class="form-control" id="synopsis" name="synopsis">
                </div>
                <div class="mb-3">
                    <label for="release_date" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Release_date</label>
                    <input type="date" class="form-control" id="release_date" name="release_date">
                </div>
                <div class="mb-3">
                    <label for="countries_id" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Countries_id</label>
                    <input type="text" class="form-control" id="countries_id" name="countries_id">
                </div>
                <div class="mb-3">
                    <label for="rating" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Rating</label>
                    <input type="float" class="form-control" id="rating" name="rating">
                </div>
                <button type="submit" class="btn btn-success px-5 text-uppercase mb-5 w-100 mt-2 text-light">Add</button>
            </form>
        </div>
    </div>
@endsection