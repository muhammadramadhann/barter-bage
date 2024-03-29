@extends('layouts.dashboard')

@section('title', 'Data Sembako')

@section('content')
    <nav class="mb-2 bg-light pt-3" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link text-decoration-none" href="{{ Route('admin') }}"><small>Dashboard</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Data Pengguna</small></li>
            </ol>
        </div>
    </nav>
    <div class="container mt-3 mx-auto py-3 mb-5">
        @if (session()->has('admin_success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session()->get('admin_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (!$users->isEmpty())
            <h3 class="fw-bold mb-4">Data Pengguna</h3>
            <div class="table-responsive card p-4">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Hp</th>
                        <th scope="col" class="w-50">Alamat</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                @if ($user->isAdmin == 1)
                                    Admin
                                @else
                                    Pengguna
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination mt-3 text-center justify-content-end">
                {{ $users->links() }}
            </div>
        @else
            <div class="text-center">
                <p class="fs-2">😔</p>
                <p>Belum ada Pengguna</p>
            </div>
        @endif
    </div>
@endsection