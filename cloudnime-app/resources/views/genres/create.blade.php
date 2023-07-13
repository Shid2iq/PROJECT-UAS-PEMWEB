@extends('layouts.main')

@section('content')
<head>
    <link href="/https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style2.css">
</head>
    <h1 class="mt-4">List Genre</h1>
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
            List Genre
        </div>
        <div class="card-body" style=" background-color:rgb(162, 164, 165);">
            <form method="POST" action="/genres">
                @csrf
                <div class="mb-3">
                    <label for="name" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Name Genre</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="w-30 text-start fs-5 masthead-heading text-uppercase text-dark">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <button type="submit" class="btn btn-success px-5 text-uppercase mb-5 w-100 mt-2 text-light">Add</button>
            </form>
        </div>
    </div>
@endsection