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
<section class="content" style="margin-top: 8vw">
    <div class="container">
        <h2 class="text-center "style="margin-top:10vh;margin-bottom:10vh">BUKU</h2>
        <div class="container">
            <div class="row py-5">
                <div class="col">
                        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
                            @foreach ($buku as $item)
                            <div class="col">
                                <div class="example-2 card cardas" style="background-image:url('{{ asset('img/buku/' . $item ->gambar) }}');background-size:cover">
                                    <div class="card-body">
                                        <div class="wrapper">
                                            <a href="{{ url('peminjam/buku') }}" class="stretched-link"></a>
                                            <div class="data">
                                                <div class="content">
                                                    <span class="author text-white">{{ $item->penulis }} | {{ $item->tahun_terbit }}</span>
                                                    <h1 class="title" style="color: #ffffff;text-decoration:none" ><a href="#">{{ $item->judul }}</h1>
                                                    <p class="text text-white">{{ $item->sinopsis }}</p>
                                                    <a href="#" class="button" style="text-decoration: none;color:#ffffff">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection

<style>
    /*Untuk Services*/
    .card:hover{
        transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
    /*Untuk Overview Buku*/
    .cardas {
    padding: 0 1.7rem;
    width: 100%;
    .menu-content {
    margin: 0;
    padding: 0;
    list-style-type: none;
    li {
      display: inline-block;
    }
    a {
      color: #ffffff;
    }
    span {
      position: absolute;
      left: 50%;
      top: 0;
      font-size: 10px;
      font-weight: 700;
      font-family: 'Open Sans';
      transform: translate(-50%, 0);
    }
  }
  .wrapper {
    background-color: $white;
    min-height: 540px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 19px 38px rgba($black, 0.3), 0 15px 12px rgba($black, 0.2);
    &:hover {
      .data {
        transform: translateY(0);
      }
    }
  }
  .data {
    position: absolute;
    bottom: 0;
    width: 100%;
    transform: translateY(calc(70px + 1em));
    transition: transform 0.3s;
    .content {
      padding: 1em;
      position: relative;
      z-index: 1;
    }
  }
  .author {
    font-size: 12px;
  }
  .title {
    color: #ffffff
    margin-top: 10px;
  }
  .text {
    height: 70px;
    margin: 0;
  }
  input[type='checkbox'] {
    display: none;
  }
  input[type='checkbox']:checked + .menu-content {
    transform: translateY(-60px);
  }
  .example-2 {
  .wrapper {
    &:hover {
      .menu-content {
        span {
          transform: translate(-50%, -10px);
          opacity: 1;
        }
      }
    }
  }
  }
  .menu-content {
    float: right;
    li {
      margin: 0 5px;
      position: relative;
    }
    span {
      transition: all 0.3s;
      opacity: 0;
    }
  }
  .data {
    color: $white;
    transform: translateY(calc(70px + 4em));
  }
  .title {
    a {
      color: #ffffff;
    }
  }
  .button {
    display: block;
    width: 100px;
    margin: 2em auto 1em;
    text-align: center;
    font-size: 12px;
    color: $white;
    line-height: 1;
    position: relative;
    font-weight: 700;
    &::after {
      content: '\2192';
      opacity: 0;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translate(0, -50%);
      transition: all 0.3s;
    }
    &:hover {
      &::after {
        transform: translate(5px, -50%);
        opacity: 1;
      }
    }
  }
}
</style>
