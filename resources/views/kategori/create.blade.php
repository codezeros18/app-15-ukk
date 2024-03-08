@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah Kategori</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
<section>
<section>
    <div class="container-fluid mt-4">
        <div class="row">
            <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="kategori"
                                    aria-describedby="emailHelp" style="border-radius: 100px">
                            </div>
                            <button type="submit" class="btn btn-dark w-100"  style="border-radius: 100px">Create</button>
                        </div>
                  </div>
            </form>
        </div>
    </div>
</section>
@endsection
