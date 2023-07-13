@extends('layouts/main')

@section('content')
<h1 class="mt-4">List Genre</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Genre Film</li>
    </ol>
    <a href="/genres/create">
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
        Genre Film
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name Genre</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead> 
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name Genre</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($genres as $genre)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $genre -> name }}</td>
                    <td>{{ $genre -> description }}</td>
                    <td>
                         <a href="/genres/{{ $genre->id }}/edit" class="btn btn-sm btn-warning"> Edit</a>
                        <form action="/genres/{{$genre->id}}" method="post">
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
