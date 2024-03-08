@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Kategori</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content mt-4">

      <div class="container">
        <div class="text-end">
          <a href="{{ url('kategori/create') }}" class="btn btn-sm btn-dark text-white mt-4 mb-4" style="border-radius: 100px" type="button"><i class="bi bi-clipboard-plus"></i></i></a>
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
                    <th>Kategori</th>
                    <td>Status</td>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($kategori as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->kategori }}</td>
                      <td>
                          <form action="{{ route('kategori.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-dark" style="border-radius: 100px"><i class="bi bi-trash-fill"></i></button>
                          </form>
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
</div>
@endsection
