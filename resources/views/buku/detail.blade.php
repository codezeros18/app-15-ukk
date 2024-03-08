@extends('layout.main')
@section('content')
<section>
    <div class="content-wrapper">
        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/buku/' . $buku ->gambar) }}" style="height: 280px; width:220px" alt="">
                </div>

                <div class="col-md-6">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col d-flex flex-column">
                            <h4 class="text-body-emphasis mb-4">{{ $buku->judul }}</h4>
                            <p class="text-body-emphasis">Kategori : {{ $buku->kategori->kategori }}</p>
                            <p class="text-body-emphasis">Penulis : {{ $buku->penulis }}</p>
                            <p class="text-body-emphasis">Penerbit : {{ $buku->penerbit }}</p>
                            <p class="text-body-emphasis">Tahun Terbit : {{ $buku->tahun_terbit }}</p>
                            <p class="text-body-emphasis">Stok : {{ $buku->stok }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('buku.edit', $buku->id) }}" class="btn btm-sm btn-dark me-2" style="border-radius: 100px"><i class="bi bi-pencil-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="width:100%; background-color:#333333;height:10px;border:1px solid #333333">
            <div class="row">
                <div class="col">
                    <p class="text-body-emphasis mt-4">{{ $buku->sinopsis }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
