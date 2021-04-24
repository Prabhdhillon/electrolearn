@extends("layout.auth")
@section('title')
    Register
@endsection
@section('content')
    <div class="auth">
        <div class="container">
            <h2 class="title " style="text-align:center;">Get Started for FREE!</h2>
            <form class="form" method="POST">
                @csrf
                <x-auth-field label="Your Name" id="name" type="text" />
                <x-auth-field label="Email address" id="email" type="email" />
                <x-auth-field label="Password" id="password" type="password" />
                <x-auth-field label="Confirm Password" id="password_confirmation" type="password" />
                <x-auth-field label="I work as a" id="work" type="text" placeholder="Developer / Designer / Student" />
                <div class="form-group-button">
                    <button type="submit" class="btn btn-primary">Create account</button>
                    <a href="" class="btn-link">Already have an account?</a>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success mt-3">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
