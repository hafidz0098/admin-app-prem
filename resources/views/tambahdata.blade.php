@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Tambah data pemesanan akun</h1>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <form method="POST" action="/tambahdata">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan alamat email..." autofocus value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Jenis Akun</label>
                        <select class="form-control" name="kategori_id">
                            @foreach ($kategoris as $kategori)
                                @if (old('kategori_id') == $kategori->id)
                                    <option value="{{ $kategori->id }}" selected>{{ $kategori->name }}</option>
                                @else
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama..." autofocus value="{{ old('name') }}">
                          @error('name')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                    <div class="mb-3">
                        <label for="tgl_mulai" class="form-label">Tanggal Awal Pesanan</label>
                        <div class="form-group">
                            <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control">
                        </div>
                    </div>  
                    <div class="mb-3">
                        <label for="tgl_akhir" class="form-label">Tanggal Akhir Pesanan</label>
                        <div class="form-group">
                            <input type="date" id="tgl_akhir" name="tgl_akhir" class="form-control">
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
