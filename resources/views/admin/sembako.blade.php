@extends('layouts.admin_app')

@section('title', 'Data Sembako')

@section('admin_content')
    <h3 class="fw-bold">Data Sembako</h3>
    <p class="mb-4">Data sembako saat ini.</p>
    <a class="btn btn-primary mb-4" href="sembako/tambah-sembako">Tambah Data</a>
    <div class="table-responsive card p-4">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Sembako</th>
                <th scope="col">Bage Points</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a class="btn btn-warning btn-action" href="">Update</a>
                    <a class="btn btn-danger btn-action" href="">Hapus</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection