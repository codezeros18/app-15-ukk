@extends('layout.main-2')
@section('content')
<section>
    <section>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="text-center text-white fw-bolder" style="font-size:2.5rem" >This Is Your Cart Inventory</p>
        </div>
    </section>
</section>
@endsection
@section('content-2')
<section class="content" style="margin-top: 8vw">
    <div class="container">
        <h2 class="text-center "style="margin-top:10vh;margin-bottom:10vh">CART</h2>
      <div class="row">
        @foreach ($buku as $item)
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img class="img-fluid rounded-start" style="max-height: 200px;max-width:150px;width:200px;height:250px"  src="{{ asset('img/buku/' . $item ->gambar) }}" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
                      <p class="card-text fw-regular">{{ $item->kategori->kategori }}</p>
                      <p class="card-text"><small class="text-body-secondary">{{ $item->sinopsis }}</small></p>
                      <a href="#" class="stretched-link"></a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
