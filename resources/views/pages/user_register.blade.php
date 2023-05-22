@extends('layout')

@section('content')


<div class="col-12 justify-content-center align-content-center p-0 m-0">
        {{-- content --}}
        <div class="col-12 row p-0 vh-100">
            <div class="d-none d-lg-block col-lg-7">
            </div>
            <div class="col-12 col-md-12 col-lg-5 mt-10 d-flex justify-content-center ms-2 ms-md-0 ms-lg-0">
                <form method="POST" action="/storedata" class="col-lg-9 col-md-9 col-11 bg-white p-3 rounded-5" style="height: 580px;">
                    @csrf
                    <div class="col-12 mb-4">
                        <h1 class="fs-2 font-bold font-sans mb-2">Create a New Account</h1>
                        <p class="font-bold">Already a Member?<span class="text-themecolor"><a href="/">&nbsp;Log In</a></span></p>
                    </div>
                    <div class="col-12 mb-3 row">
                        <div class="col-6 pe-0">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-full border-2 border-themecolor" name="firstname" placeholder="name@example.com" value="{{old('firstname')}}">
                                <label for="floatingInput">First Name</label>
                                @error('firstname')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 pe-0">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-full border-2 border-themecolor" name="lastname" placeholder="name@example.com" value="{{old('lastname')}}">
                                <label for="floatingInput">Last Name</label>
                                @error('lastname')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" autocomplete="off"
                                placeholder="Your password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                    </div>
                    <div class="col-12 mb-4 pe-2">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-full border-2 border-themecolor" name="email" placeholder="name@example.com" value="{{old('email')}}">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-full border-2 border-themecolor" name="password" placeholder="Password" value="{{old('password')}}">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-full border-2 border-themecolor" name="mobile"  placeholder="Mobile Number" value="{{old('mobile')}}">
                            <label for="floatingPassword">Mobile Number</label>
                            @error('mobile')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-full border-2 border-themecolor" name="address" placeholder="Address" value="{{old('address')}}">
                            <label for="floatingPassword">Address</label>
                            @error('address')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 justify-content-center d-flex">
                        <button class="col-9 btn btn-primary rounded-full bg-themecolor hover:bg-themecolor border-0 fs-3 font-bold">Register</button>
                    </div>

                </form>
            </div>
        </div>
<!-- * App Capsule -->



@endsection