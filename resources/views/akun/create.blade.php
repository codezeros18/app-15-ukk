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
    <section>
        <div class="container-fluid mt-4">
            <div class="row">
                <form action="{{ route('akun.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="container">
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                        aria-describedby="emailHelp" style="border-radius: 100px">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                        aria-describedby="emailHelp" style="border-radius: 100px">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                        aria-describedby="emailHelp" style="border-radius: 100px">
                                </div>
                                <div class="mb-3">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control" style="border-radius: 100px">
                                        <option disabled selected>Pilih Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                        <option value="peminjam">Peminjam</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100" style="border-radius: 100px">Create Account</button>
                </form>
            </div>
        </div>
    </section>

</div>
@endsection
