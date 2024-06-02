@extends('layouts.navbar')

@section('content')
    <h4 class="mb-3">Tambah pembayaran</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/pembayaran" method="post">
        @csrf
        <div class="card col-lg-5">
            <div class=" card-body">
                <div class="mb-3">
                    <label for="jumlah" class="form-label">jumlah</label>
                    <input placeholder="masukkan jumlah" type="number" name="jumlah" class="form-control" id="jumlah"
                        value="{{ old('jumlah') }}" required>
                </div>
                <div class="mb-3">
                    <label for="warga_id" class="form-label">Nama Warga</label>
                    <select name="warga_id" class="form-control" id="warga_id" required>
                        <option value="">Pilih Warga</option>
                        @foreach ($warga as $w)
                            <option value="{{ $w->id }}"
                                {{ old('warga_id', isset($pembayaran) ? $pembayaran->warga_id : '') == $w->id ? 'selected' : '' }}>
                                {{ $w->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input placeholder="masukkan tanggal" type="date" name="tanggal" class="form-control" id="tanggal"
                        value="{{ old('tanggal') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah pembayaran</button>
            </div>
        </div>
    </form>
@endsection
