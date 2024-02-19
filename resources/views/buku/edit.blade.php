@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Buku</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('buku/dashboard') }}">Data Buku</a></li>
                <li class="breadcrumb-item active">Edit</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="container-fluid mt-4">
            <div class="row">
                <form action="" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Poto Buku</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="gambar"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="judul"
                                        aria-describedby="emailHelp" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penulis</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="penulis"
                                        aria-describedby="emailHelp" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="penerbit"
                                        aria-describedby="emailHelp" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tahun_terbit"
                                        aria-describedby="emailHelp" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori">Kategori</label>
                                    <select name="id_kategori" id="kategori" class="form-control">
                                        <option disabled selected>Kategori</option>
                                        {{-- @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sinopsis</label>
                                    <input type="textarea" class="form-control" id="exampleInputEmail1" name="sinopsis"
                                        aria-describedby="emailHelp" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="stok"
                                        aria-describedby="emailHelp" value="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark">Update</button>
                      </div>
                </form>
            </div>
        </div>
      </section>
</div>
@endsection
