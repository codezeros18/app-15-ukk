@extends('layout.main-3')
@section('content')
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 px-0">
                <img src="img/background.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            <div class="col-md-5 my-auto">
                <div class=" align-item-center px-5 ms-xl-4 pt-xl-0 mt-xl-n5">
                    <h3 class="fw-bold" style="font-size: 26px;">Hello Again!</h3>
                    <h4 class="mb-5 fw-normal" style="font-size: 18px;font-weight:300">Welcome Back</h4>
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" style="border-radius: 100px" placeholder="Email">
                        </div>
                        <div class="mb-3">
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1" style="border-radius: 100px" placeholder="Password">
                        </div>
                        <div class="text-center pt-1 mb-3">
                            <button type="submit" class="btn w-100" style="background-color: #333333;border-radius:100px;color:white">Login</button>
                        </div>
                        <div class="text-center pt-1 mb-4">
                            <a href="{{ url('/register') }}" class="w-100" style="text-decoration: none;">Dont Have an Account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

