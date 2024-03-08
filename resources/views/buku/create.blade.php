@extends('layout.main')
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Buku</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section>
    <div class="container-fluid mt-4">
        <div class="row">
            <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Poto Buku</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" name="gambar"
                                    aria-describedby="emailHelp" style="border-radius:100px">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="judul"
                                    aria-describedby="emailHelp" style="border-radius:100px">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="penulis"
                                    aria-describedby="emailHelp" style="border-radius:100px">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="penerbit"
                                    aria-describedby="emailHelp" style="border-radius:100px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="tahun_terbit"
                                    aria-describedby="emailHelp" style="border-radius:100px">
                            </div>
                            <div class="mb-3">
                                <label for="kategori">Kategori</label>
                                <select name="id_kategori" id="kategori" class="form-control" style="border-radius:100px">
                                    <option disabled selected>Pilih Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" name="stok"
                                aria-describedby="emailHelp" style="border-radius:100px">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sinopsis</label>
                                    <textarea class="form-control" id="exampleInputEmail1" name="sinopsis"
                                        aria-describedby="emailHelp" style="border-radius:0" rows="4" maxlength="1000"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100" style="border-radius:100px">Tambah Buku</button>
            </form>
        </div>
    </div>
  </section>
</div>

@endsection
