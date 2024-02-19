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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Poto</th>
                    <th>Buku</th>
                    <th>Genre</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Trident</td>
                    <td>Sword</td>
                    <td>Win 95+</td>
                    <td>
                        <a href="{{ url('/detail') }}" class="btn btn-dark">Detail</a>
                    </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          {{-- <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div> --}}
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection
