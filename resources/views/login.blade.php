@extends("layout.auth")
@section('title')
    Login
@endsection
@section('content')

    <div class="auth">
        <div class="container">
            <h2 class="title " style="text-align:center;">Continue your Journey!</h2>
            <form class="form" method="POST">
                @csrf
                <x-auth-field label="Email address" id="email" type="email" />
                <x-auth-field label="Password" id="password" type="password" />
                <div class="form-group-button">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="" class="btn-link">Are you new here?</a>
                </div>
            </form>
        </div>
    </div>

@endsection
