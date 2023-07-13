@extends('layouts/main')

@section('content')
<h1 class="mt-4">List Countries</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Countries Film</li>
    </ol>
    <a href="/countries/create">
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
        Countries Film
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                  
                </tr>
            </thead> 
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                 
                </tr>
            </tfoot>
            <tbody>
                @foreach ($countries as $countries)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $countries -> name }}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
