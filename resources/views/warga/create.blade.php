@extends('layouts.navbar')

@section('content')
    <h4 class="mb-3">Tambah warga</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/warga" method="post">
        @csrf
        <div class="card col-lg-5">
            <div class=" card-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input placeholder="masukkan nama" type="text" name="nama" class="form-control" id="nama"
                        value="{{ old('nama') }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <input placeholder="masukkan alamat" type="text" name="alamat" class="form-control" id="alamat"
                        value="{{ old('alamat') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah warga</button>
            </div>
        </div>
    </form>
@endsection
