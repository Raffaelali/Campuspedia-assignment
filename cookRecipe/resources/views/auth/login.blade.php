@extends('layouts.main')
@section('title','login')
@section('content')
<section class="loginContent">
    <div class="layar">
        <div class="user signinBx">
            <div class="imageBx"><img src="{{asset('images/pexels-sasha-maslova-8388520(2).jpg')}}" alt="" id="pict1"></div>
            <div class="formBx">
                <form class="formSign" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>Sign In</h2>
                    <input type="email" name="email" id="email" placeholder="Email Address" required autofocus>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="submit" name="submit" id="submit" value="Login">
                    <p class="signup">Don't have an account? <a href="#" onclick="toggle();">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="user signupBx">
            <div class="formBx">
                <form class="formSign" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Sign Up</h2>
                    <input type="text" name="name" id="name" placeholder="name" required>
                    <input type="email" name="email" id="email" placeholder="Email Address">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    <input type="submit" name="submit" id="submitregister" value="Sign Up">
                    <p class="signup">Already have an account? <a href="#" onclick="toggle();">Sign In</a></p>
                </form>
            </div>
            <div class="imageBx"><img src="{{asset('images/pexels-zetong-li-1784578.jpg')}}" alt="" id="pict1"></div>
        </div>
    </div>
</section>
@endsection
