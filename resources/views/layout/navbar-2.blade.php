
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid my-3 mx-3">
      <h3><a class="navbar text-white" style="font-weight:800" href="#">ZERO</a></h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="bi bi-list fw-bold" style="color: #ffffff"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}" style="font-size:12px;font-weight:700;">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/book') }}" style="font-size:12px;font-weight:700;">BOOK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/blog') }}" style="font-size:12px;font-weight:700;">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/cart') }}" style="font-size:12px;font-weight:700;">CART</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
            <a href="{{ url('/login') }}" type="button" class="btn mx-2" style="background-color: #ffffff;font-size:12px;font-weight:700;border-radius:100px">LOG IN</a>
        </form>
      </div>
    </div>
  </nav>
