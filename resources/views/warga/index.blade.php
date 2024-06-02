@extends('layouts.navbar')

@section('content')
    <a href="warga/create" class="btn btn-primary mb-3">Tambah warga</a>
    <p class="fs-5">Selamat datang di halaman warga!</p>
    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center col-lg-5" role="alert">
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warga as $w)
                    <tr>
                        <td>{{ $w->id }}</td>
                        <td>{{ $w->nama }}</td>
                        <td>{{ $w->alamat }}</td>
                        <td>
                            <form action="/warga/{{ $w->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('yakin mau apus?')" type="submit"
                                    class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="/warga/{{ $w->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
