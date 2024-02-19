@extends('layout.main-2')
@section('content')
<section>
    <div class="position-absolute top-50 start-50 translate-middle">
        <p class="text-center text-white fw-bolder" style="font-size:2.5rem" >ZERO <span style="font-size: 16px">the</span><br>LIBRARY</p>
    </div>
    <div class="position-absolute bottom-0 end-0 p-4">
        <button type="button" class="btn me-5 py-2 text-white" style="margin-top:1vh">Whats The Library About</button>
        <button type="button" class="btn btn-outline-dark me-5 text-white" style="border-radius: 0%;margin-top:1vh">Choose Your Book</button>
    </div>
</section>
@endsection

@section('content-2')
{{-- <section>
    <div class="align-items-center">
        <h2 class="text-center "style="margin-top:10vh;margin-bottom:10vh">Services</h2>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card" style="background-image:url('img/background.jpg');background-size:cover;">
                    <div class="card-body mx-auto justify-content-center">
                      <h5 class="card-title text-white">PEMINJAMAN</h5>
                      <a href="#" class="stretched-link"></a>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card" style="background-image:url('img/background.jpg');background-size:cover;">
                      <div class="card-body mx-auto justify-content-center">
                        <h5 class="card-title text-white">PENGEMBALIAN</h5>
                        <a href="#" class="stretched-link"></a>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background-image:url('img/background.jpg');background-size:cover;">
                      <div class="card-body mx-auto justify-content-center">
                        <h5 class="card-title text-white">CART</h5>
                        <a href="#" class="stretched-link"></a>
                      </div>
                    </div>
                 </div>

              </div>
        </div>
    </div>
</section> --}}
<section>
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="text-center" style="margin-top:10vh;margin-bottom:10vh">Services</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/cardbook1.jpg');background-size:cover">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Meminjam Buku Perpustakaan</h3>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/cardbook2.jpg');background-size:cover">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pengembalian Buku Perpustakaan</h3>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/cardbook3.jpg');background-size:cover">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Melihat Cart Buku Yang Ingin Kamu Pinjam</h3>
                <a href="#" class="stretched-link"></a>
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
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="img/book.jpg" alt="Card image cap" style="height: 50vh">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptatem quod nesciunt facilis nisi sunt harum obcaecati alias excepturi adipisci molestiae atque, delectus, pariatur consequuntur rem quibusdam. Repellendus eligendi, ducimus vitae maiores aut in aliquam! Cum maxime quam, ad, quo optio corrupti id dolorum porro sapiente totam nemo tempora minus?</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="img/book.jpg" alt="Card image cap" style="height: 50vh">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique provident accusantium quam consequatur debitis, tenetur ut pariatur earum enim? Quisquam voluptate dolor sit nostrum error natus non quo, quis quos deserunt praesentium temporibus quaerat doloremque inventore totam saepe illum nemo sequi. Tempora itaque, consequatur sit autem doloribus alias esse? Distinctio!</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="img/book.jpg" alt="Card image cap" style="height: 50vh">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ut nostrum suscipit. Voluptates neque esse deserunt explicabo aperiam quod eos id ad animi nam, corporis dolorem in quo reprehenderit repudiandae, ea temporibus consequuntur! Esse consequatur sequi temporibus autem aspernatur, beatae quam perspiciatis ad odio distinctio obcaecati asperiores numquam dicta veniam!</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="img/book.jpg" alt="Card image cap" style="height: 50vh">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ut nostrum suscipit. Voluptates neque esse deserunt explicabo aperiam quod eos id ad animi nam, corporis dolorem in quo reprehenderit repudiandae, ea temporibus consequuntur! Esse consequatur sequi temporibus autem aspernatur, beatae quam perspiciatis ad odio distinctio obcaecati asperiores numquam dicta veniam!</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
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
@endsection
