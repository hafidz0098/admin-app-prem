@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Order netflix telah selesai</h1>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                                <thead class="p-3 mb-2 bg-success">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($akuns as $akun)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $akun->name }}</td>
                                        <td>{{ $akun->email }}</td>
                                        <td>{{ $akun->tgl_mulai }}</td>
                                        <td>{{ $akun->tgl_akhir }}</td>
                                        <td>{{ $akun->status->name}}</td>
                                    </tr>  
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection