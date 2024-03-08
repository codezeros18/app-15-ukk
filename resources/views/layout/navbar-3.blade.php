
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid my-3 mx-3">
      <h3><a class="navbar text-black" style="font-weight:800" href="#">ZERO</a></h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="bi bi-list fw-bold" style="color: #ffffff"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-black" aria-current="page" href="{{ route('peminjam.dashboard') }}" style="font-size:12px;font-weight:700;">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{ url('peminjam/buku') }}" style="font-size:12px;font-weight:700;">BOOK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{ url('peminjam/cart') }}" style="font-size:12px;font-weight:700;">CART</a>
          </li>

        </ul>
        @auth
        <form class="d-flex" role="search">
            <a href="{{ url('/profile') }}" type="button" class="btn mx-2 text-white" style="background-color: #333333;font-size:12px;font-weight:700;border-radius:100px">{{ Auth::user()->name }}</a>
        </form>
        @else
        <form class="d-flex" role="search">
            <a href="{{ url('/profile') }}" type="button" class="btn mx-2 text-white" style="background-color: #333333;font-size:12px;font-weight:700;border-radius:100px">Log In</a>
        </form>
        @endauth

      </div>
    </div>
  </nav>
