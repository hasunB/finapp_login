@extends('layout')

@section('content')


<div class="col-12 justify-content-center align-content-center p-0 m-0">
        {{-- content --}}
        <div class="col-12 row p-0 vh-100">
            <div class="d-none d-lg-block col-lg-7">
            </div>
            <div class="col-12 col-md-12 col-lg-5 mt-20 d-flex justify-content-center ms-2 ms-md-0 ms-lg-0">
                <form method="POST" action="/userlogin" class="col-lg-9 col-md-9 col-11 mt-20 bg-white p-3 rounded-5" style="height: 400px;">
                    @csrf
                    <div class="col-12 mb-4">
                        <h1 class="fs-1 font-bold font-sans mb-2">Get Started</h1>
                        <p class="font-bold">New User?<span class="text-themecolor"><a href="/register">&nbsp;Register</a></span></p>
                    </div>
                    @if (Session::has('Error'))
                    <p class="text-red-500 fs-5 font-bold mb-3">{{Session::get('Error')}}</p>
                    @endif
                    <div class="col-12 mb-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-full border-2 border-themecolor" name="email" placeholder="name@example.com" value="{{old('email')}}">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-full border-2 border-themecolor" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 justify-content-center d-flex mb-4">
                        <div class="form-check">
                            <input class="form-check-input border-1 border-themecolor" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-12 justify-content-center d-flex">
                        <button class="col-9 btn btn-primary rounded-full bg-themecolor hover:bg-themecolor border-0 fs-3 font-bold">Log In</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- content --}}
    </div>
</div>



@endsection