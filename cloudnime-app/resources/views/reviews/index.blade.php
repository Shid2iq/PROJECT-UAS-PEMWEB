@extends('layouts/main')

@section('content')
<h1 class="mt-4">Review Anime</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Review</li>
    </ol>
    <a href="/reviews/create">
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
        Review Anime
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>no</th>
                    <th>movies_id</th>
                    <th>users_id</th>
                    <th>date</th>
                    <th>description</th>
                    <th>rating</th>
                    <th>action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>no</th>
                    <th>movies_id</th>
                    <th>users_id</th>
                    <th>date</th>
                    <th>description</th>
                    <th>rating</th>
                    <th>action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($reviews as $review)
                <tr>
                    <td>{{ $loop   ->iteration  }}</td>
                    <td>{{ $review ->movie->title }}</td>
                    <td>{{ $review ->users_id }}</td>
                    <td>{{ $review ->date }}</td>
                    <td>{{ $review ->description }}</td>
                    <td>{{ $review ->rating }}</td>
                    <td>
                        <a href="/reviews/{{$review->id}}/edit" class="btn btn-sm btn-warning"> Edit</a>
                        <form action="/reviews/{{$review->id}}" method="post">
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