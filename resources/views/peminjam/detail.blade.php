@extends('layout.main-2')
@section('content')
<section>
    <section>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="text-center text-white fw-bolder" style="font-size:2.5rem" >All You Want Is Right Here</p>
        </div>
        {{-- <div class="position-absolute bottom-0 end-0 p-4">
            <button type="button" class="btn me-5 py-2 text-white" style="margin-top:1vh">Whats The Library About</button>
            <button type="button" class="btn btn-outline-dark me-5 text-white" style="border-radius: 0%;margin-top:1vh">Choose Your Book</button>
        </div> --}}
    </section>
</section>
@endsection
@section('content-2')
<section>
    <div class="container px-4 py-5">
        <h2 class="text-center" style="margin-top:10vh;margin-bottom:10vh">Book Details</h2>
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
          <div class="col d-flex flex-column align-items-start gap-2">
            <img class="img-fluid" src="{{ asset('img/buku/' . $buku ->gambar) }}" style="height: 550px; width:400px" alt="">
          </div>

          <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
              <div class="col d-flex flex-column gap-2">
                <h4 class="fw-semibold mb-0 text-body-emphasis">Judul</h4>
                <p class="text-body-secondary">{{ $buku->judul }}</p>
              </div>
              <div class="col d-flex flex-column gap-2">
                <h4 class="fw-semibold mb-0 text-body-emphasis">Kategori</h4>
                <p class="text-body-secondary">{{ $buku->kategori->kategori }}</p>
              </div>
              <div class="col d-flex flex-column gap-2">
                <h4 class="fw-semibold mb-0 text-body-emphasis">Penulis</h4>
                <p class="text-body-secondary">{{ $buku->penulis }}</p>
              </div>
              <div class="col d-flex flex-column gap-2">
                <h4 class="fw-semibold mb-0 text-body-emphasis">Penerbit</h4>
                <p class="text-body-secondary">{{ $buku->penerbit }}</p>
              </div>

              <div class="col d-flex flex-column gap-2">
                <h4 class="fw-semibold mb-0 text-body-emphasis">Tahun Terbit</h4>
                <p class="text-body-secondary">{{ $buku->tahun_terbit }}</p>
              </div>
              <div class="col d-flex flex-column gap-2">
                <h4 class="fw-semibold mb-0 text-body-emphasis">Stok</h4>
                <p class="text-body-secondary">{{ $buku->stok }}</p>
              </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column g-4 gap-2">
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Sinopsis</h4>
                    <p class="text-body-secondary">{{ $buku->sinopsis }}</p>
                  </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection
