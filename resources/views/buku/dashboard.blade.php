@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Buku</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mt-4">
      <div class="container-fluid">
        <div class="text-end">
            <a href="{{ url('buku/create') }}" class="btn btn-sm btn-dark text-white  mt-4 mb-4" style="border-radius: 100px" type="button"><i class="bi bi-clipboard-plus"></i></i></a>
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
                    <th>Poto</th>
                    <th>Buku</th>
                    <th>Genre</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($buku as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img width="100" height="150" src="{{ asset('img/buku/' . $item ->gambar) }}" alt=""></td>
                      <td>{{ $item->judul }}</td>
                      <td>{{ $item->kategori->kategori }}</td>
                      <td>
                        <div class="d-flex">
                          {{-- <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-dark me-2">Edit</a> --}}
                          <a href="{{ route('buku.show', $item->id) }}" class="btn btn-sm btn-dark me-2" style="border-radius: 100px"><i class="bi bi-pencil-square"></i></a>
                          <form action="{{ route('buku.destroy', $item->id)}}" method="POST">
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

            {{-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div> --}}
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
