@extends('layouts.main')

@section('content')
<head>
    <link href="/https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style2.css">
</head>
    <h1 class="mt-4">Review film</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Review</li>
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
            Review film
        </div>
        <div class="card-body" style=" background-color:rgb(162, 164, 165);">
            <form method="POST" action="/reviews">
                @csrf
                <div class="mb-3">
                    <label for="movies_id" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">movies_id</label>
                    <input type="text" class="form-control" id="movies_id" name="movies_id">
                </div>
                <div class="mb-3">
                    <label for="users_id" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">users_id</label>
                    <input type="text" class="form-control" id="users_id" name="users_id">
                </div>
                <div class="mb-3">
                    <label for="date" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="mb-3">
                    <label for="description" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="rating" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">rating</label>
                    <input type="float" class="form-control" id="rating" name="rating">
                </div>
                <button type="submit" class="btn btn-success px-5 text-uppercase mb-5 w-100 mt-2 text-light">Add</button>
            </form>
        </div>
    </div>
@endsection