@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Akun</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="container-fluid mt-4">
            <div class="row">
                <form action="{{ route('admin.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                        aria-describedby="emailHelp" value="{{ old('name',$user->name) }}" style="border-radius: 100px">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                        aria-describedby="emailHelp" value="{{ old('email',$user->email) }}" style="border-radius: 100px">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="password"
                                        aria-describedby="emailHelp" style="border-radius: 100px">
                                </div>
                                <div class="mb-3">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control" style="border-radius: 100px">
                                        <option disabled selected>Pilih Role</option>
                                        <option value="admin" {{ old('role',$user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="petugas" {{ old('role',$user->role) == 'petugas' ? 'selected' : '' }}>Petugas</option>
                                        <option value="peminjam" {{ old('role',$user->role) == 'peminjam' ? 'selected' : '' }}>Peminjam</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-dark w-100" style="border-radius: 100px">Update</button>
                            </div>
                      </div>
                </form>
            </div>
        </div>
      </section>
</div>
@endsection

