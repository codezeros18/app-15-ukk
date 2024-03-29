@extends('layout.main-4')
@section('content')
<section>
    <div class="container mt-4">
        <div class="card">
            <div class="row">
                <form action="{{ route('akun.store') }}" method="POST">
                    @csrf
                    <div class="container m-auto">
                        <div class="row">
                            <div class="container">

                                <div class="col-md">
                                    Profile Information
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                            aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                            aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Change</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="row">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="container m-auto">
                        <div class="row">
                            <div class="col-md">
                                Update Password
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password Verification</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Save</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="row">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="{{ route('logout') }}"  class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();" style="text-decoration: none"><i class="nav-icon fas fa-arrow-right"></i> Logout</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
