<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <span class="brand-link font-weight-light">ZERO</span>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      @auth
      @if (Auth::user()->role === 'admin')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-clock"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/buku') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Buku
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/kategori') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Kategori
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/peminjaman') }}" class="nav-link">
                    <i class="nav-icon fas fa-handshake"></i>
                    <p>
                        Peminjaman
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/pengembalian') }}" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-heart"></i>
                    <p>
                        Pengembalian
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/akun') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Profile
                    </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="{{ route('logout') }}"  class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();" style="text-decoration: none;color:grey"><i class="nav-icon fas fa-arrow-right"></i> Logout</a>
                </form>
                </li> --}}
        </ul>
      </nav>
      @elseif (Auth::user()->role === 'petugas')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('petugas.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-clock"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/buku') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Buku
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/kategori') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Kategori
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/peminjaman') }}" class="nav-link">
                    <i class="nav-icon fas fa-handshake"></i>
                    <p>
                        Peminjaman
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/pengembalian') }}" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-heart"></i>
                    <p>
                        Pengembalian
                    </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="{{ route('logout') }}"  class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();" style="text-decoration: none"><i class="nav-icon fas fa-arrow-right"></i> Logout</a>

                </form>
                </li> --}}
        </ul>
      </nav>
      @endif
      @endauth


      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
