@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Peminjaman</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mt-4">
      <div class="container-fluid">
        <div class="text-end">
            <a href="{{ url('peminjaman/create') }}" class="btn btn-sm btn-dark text-white mt-4 mb-4" style="border-radius: 100px; background-color:#333333" type="button"><i class="bi bi-clipboard-plus"></i></a>
            <a href="{{ url('/export-peminjaman') }}" class="btn btn-sm btn-dark text-white mt-4 mb-4" style="border-radius: 100px; background-color:#333333"><i class="bi bi-download"></i></i></a>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Pengembalian</th>
                    <th>Jumlah Pinjam</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($peminjaman as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->user->name }}</td>
                      <td>{{ $item->buku->judul }}</td>
                      <td>{{ $item->tgl_peminjaman }}</td>
                      <td>{{ $item->tgl_pengembalian }}</td>
                      <td>{{ $item->actual_tgl_pengembalian }}</td>
                      <td>{{ $item->jumlah_pinjam }}</td>
                      <td>
                        @if ($item->actual_tgl_pengembalian == null ? '' : $item->tgl_pengembalian < $item->actual_tgl_pengembalian)
                        <div class="badge badge-danger">Terlambat</div>
                        @else
                        <div class="badge badge-success">Tepat</div>
                        @endif
                        {{-- <div class="badge badge-{{
                            $item->actual_tgl_pengembalian == null
                            ? ''
                            : ($item->tgl_pengembalian < $item->actual_tgl_pengembalian
                                ? 'danger'
                                : 'success')
                            }}"></div> --}}
                      </td>
                      <td>
                        <div class="d-flex">
                          <form action="{{ route('peminjaman.destroy', $item->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-dark" style="border-radius: 100px"><i class="bi bi-trash-fill"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
