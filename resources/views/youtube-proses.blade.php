@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Order Youtube dalam proses</h1>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                                <thead class="p-3 mb-2 bg-warning text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
                                        <td>
                                          <form method="post" action="/order-proses/{{ $akun->id }}">
                                            @method('put')
                                            @csrf
                                            <select class="custom-select" name="status_id">
                                              @foreach ($statuses as $status)
                                              @if (old('status_id', $akun->status_id) == $status->id)
                                                  <option value="{{ $status->id }}" selected>{{ $status->name }}</option>
                                              @else
                                                  <option value="{{ $status->id }}">{{ $status->name }}</option>
                                              @endif
                                              @endforeach
                                            </select>
                                        </td>
                                        <td>
                                          <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure?')">Update</button>
                                        </td>  
                                          </form>
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