@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
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
            <form method="POST" action="/genres/{{ $genre->id }}">
                @csrf
                @method('PUT')
                <label for="name" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">name:</label><br>
                <input type="text" class="form-control" id="name" name="name" value="{{ $genre->name }}"><br><br>

                <label for="description" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">description:</label><br>
                <input type="text" class="form-control" id="description" name="description" value="{{ $genre->description }}"><br><br>

                <input type="submit" class="btn btn-success px-5 text-uppercase mb-5 w-100 mt-2 text-light" value="Update Genre">
            </form>
        </div>
    </div>
@endsection