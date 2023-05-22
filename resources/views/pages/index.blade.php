@extends('layout')

@section('content')


<!-- App Header -->
<div class="appHeader no-border transparent position-absolute">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"></div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2 text-center">
        <h1>Log in</h1>
        <h4>Fill the form to log in</h4>
    </div>
    <div class="section mb-5 p-2">

        <form method="POST" action="/userlogin">
            <div class="card">
                @if (Session::has('Error'))
                    <p class="text-red-500 fs-5 font-bold mb-3">{{Session::get('Error')}}</p>
                @endif
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email1">E-mail</label>
                            <input type="email" class="form-control" id="email1" name="email" placeholder="Your e-mail" value="{{old('email')}}">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
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