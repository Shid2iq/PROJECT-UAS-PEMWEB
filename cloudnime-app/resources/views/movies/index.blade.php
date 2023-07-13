@extends('layouts/main')

@section('content')
<h1 class="mt-4">Movies Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Movies</li>
    </ol>
    <a href="/movies/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Movies Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Poster</th>
                    <th>Genre_id</th>
                    <th>Synopsis</th>
                    <th>Release_date</th>
                    <th>Countries_id</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Poster</th>
                    <th>Genre_id</th>
                    <th>Synopsis</th>
                    <th>Release_date</th>
                    <th>Countries_id</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <td>{{ $loop ->iteration }}</td>
                    <td>{{ $movie ->title }}</td>
                    <td>{{ $movie ->poster }}</td>
                    <td>{{ $movie ->genre->name }}</td>
                    <td>{{ $movie ->synopsis }}</td>
                    <td>{{ $movie ->release_date }}</td>
                    <td>{{ $movie ->countries->name }}</td>
                    <td>{{ $movie ->rating }}</td>
                    <td>
                        <a href="/movies/{{ $movie->id }}/edit" class="btn btn-sm btn-warning"> Edit</a>
                        <form action="/movies/{{$movie->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" 
                        onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection