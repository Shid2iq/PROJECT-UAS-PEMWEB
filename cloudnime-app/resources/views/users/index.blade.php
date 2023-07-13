@extends('layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Users Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Users Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ishaq</td>
                        <td>Rizky</td>
                        <td>KucingMelon</td>
                        <td>Rizky@gmail.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Raffikri</td>
                        <td>Aceng</td>
                        <td>Aceng123</td>
                        <td>RaffikriMaw@gmail.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Shidiq</td>
                        <td>MuhSidiq</td>
                        <td>Shidiq123</td>
                        <td>MuhSidiq@gmail.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Syahri</td>
                        <td>Ghifari</td>
                        <td>Gippsy99</td>
                        <td>Gipp000@gmail.com</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Fakhirul</td>
                        <td>Akmal</td>
                        <td>Asdospw</td>
                        <td>Asdos2023@gmail.com</td>
                        <td>Administrator</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
