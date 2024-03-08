@extends('layout.main-2')
@section('content')
<section>
    <div class="position-absolute top-50 start-50 translate-middle">
        <p class="text-center text-white fw-bolder" style="font-size:2.5rem" >ZERO <span style="font-size: 16px">the</span><br>LIBRARY</p>
    </div>
    <div class="position-absolute bottom-0 end-0 p-4">
        {{-- <button type="button" class="btn me-5 py-2 text-white" style="margin-top:1vh">Whats The Library About</button> --}}
        <a href="{{ url('peminjam/buku') }}" type="button" class="btn btn-outline-dark me-5 text-white" style="border-radius: 0%;margin-top:1vh">Choose Your Book</a>
    </div>
</section>
@endsection

@section('content-2')
<section>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="text-center" style="margin-top:10vh;margin-bottom:10vh">Services</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('{{ url('img/cardbook1.jpg') }}');background-size:cover;border-radius:0">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Meminjam Buku Perpustakaan</h3>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('{{ url('img/cardbook2.jpg') }}');background-size:cover;border-radius:0">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pengembalian Buku Perpustakaan</h3>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image:url('{{ url('img/cardbook3.jpg') }}');background-size:cover;border-radius:0">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Melihat Cart Buku Yang Kamu Pinjam</h3>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<section>
    <div class="align-items-center">
        <h2 class="text-center py-5">Overview</h2>
        <div class="container">
            <div class="row py-5">
                <div class="col">
                        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
                            @foreach ($buku as $item)
                            <div class="col">
                                <div class="example-2 card cardas" style="background-image:url('{{ asset('img/buku/' . $item ->gambar) }}');background-size:cover">
                                    <div class="card-body">
                                        <div class="wrapper">
                                            {{-- <a href="{{ route('peminjam.detail', $item->id) }}" class="stretched-link"></a> --}}
                                            <div class="data">
                                                <div class="content">
                                                    <span class="author text-white" style="font-size: 15px">{{ $item->judul }} | {{ $item->tahun_terbit }}</span>
                                                    <p class="text text-white">{{ $item->sinopsis }}</p>
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
    </div>
</section>
<section id="section1">
    <br>
</section>
<section>
    <div class="container">
        <div class="row mb-4"  style="margin-top: 15vh;">
            <div class="col-12 mx-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.929833125283!2d106.53692067474981!3d-6.140128393846817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a01a955744917%3A0xc6719d8a57429213!2sGrand%20Batavia%20Height!5e0!3m2!1sen!2sid!4v1707805762650!5m2!1sen!2sid" style="border:0;width:100%;height:60vh" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('navbar a');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            window.scrollTo({
                top: targetSection.offsetTop,
                behavior: 'smooth'
            });
        });
    });
});
</script>
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
    background: url(https://tvseriescritic.files.wordpress.com/2016/10/stranger-things-bicycle-lights-children.jpg) center / cover no-repeat;
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
@endsection
