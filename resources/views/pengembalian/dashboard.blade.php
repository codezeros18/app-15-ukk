@extends('layout.main')
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengembalian Buku</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section>
    <div class="container-fluid mt-4">
        <div class="row">
            <form action="{{ route('pengembalian.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    @if (session('message'))
                        <div class="alert {{ session('alert-class') }}">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user">Akun User</label>
                                <select name="id_user" id="user" class="form-control">
                                    <option disabled selected>Pilih User</option>
                                    @foreach ($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Buku</label>
                                <select name="id_buku" id="buku" class="form-control">
                                    <option disabled selected>Pilih Buku</option>
                                    @foreach ($buku as $item)
                                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Kembalikan</button>
            </form>
        </div>
    </div>
  </section>
</div>

@endsection
