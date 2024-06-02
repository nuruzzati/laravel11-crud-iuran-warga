@extends('layouts.navbar')

@section('content')
    <a href="pembayaran/create" class="btn btn-primary mb-3">Tambah pembayaran</a>
    <p class="fs-5">Selamat datang di halaman pembayaran!</p>
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
                    <th>jumlah</th>
                    <th>tanggal</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayaran as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->warga->nama }}</td>
                        <td>{{ $p->jumlah }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>
                            <form action="/pembayaran/{{ $p->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('yakin mau apus?')" type="submit"
                                    class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="/pembayaran/{{ $p->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
