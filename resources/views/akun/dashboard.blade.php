@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Akun</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content mt-4">
      <div class="container-fluid">
        <div class="text-end">
            <a href="{{ url('akun/create') }}" class="btn btn-sm text-white btn-dark mt-4 mb-4" style="border-radius: 100px" type="button"><i class="bi bi-clipboard-plus"></i></a>
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->role}}</td>
                        <td>
                          <div class="d-flex">
                            <a href="{{ route('akun.edit', $item->id) }}" class="btn btn-sm btn-dark me-2" style="border-radius: 100px"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('akun.destroy', $item->id)}}" method="POST">
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
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
@endsection
