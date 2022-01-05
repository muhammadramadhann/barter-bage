@extends('layouts.admin_app')

@section('title', 'Tambah Data Sembako')

@section('admin_content')
    <div class="card card-form mb-4 pt-4 pb-3 mx-auto">
        <h4 class="fw-bold text-center">Tambah Data Sembako</h4>
    </div>
    <div class="card card-body card-form mx-auto pt-4">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nama Sembako</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ex: Minyak Goreng" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="point" class="form-label fw-bold">Jumlah Point</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="point" id="point" placeholder="Ex: 200" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Gambar</label>
                <div class="input-group">
                    <input type="file" class="form-control" name="image" id="image" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="description" class="form-label fw-bold">Deskripsi</label>
                <div class="input-group">
                    <textarea name="description" id="description" cols="60" rows="3" class="rounded"></textarea>
                </div>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary w-100" style="padding-top: 8px; padding-bottom: 8px;">Tambah</button>
            </div>
        </form>
    </div>
@endsection