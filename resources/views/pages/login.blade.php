@extends('authentication') 

@section('content')
<div class="auth_body">
<div class="auth_box">
    <img src="{{ asset('img/Logo.png') }}" alt="PallPaws" class="logo" />
    <h2 class="login__title">Welcome!</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if($errors->any())
        <div style="color:red;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" class="auth_input" placeholder="Email" required>
        <input type="password" name="password" class="auth_input" placeholder="Password" required>

        <div class="login__list">
            <p><a href="{{ route('register') }}">Register Now</a></p>
            <p><a href="{{ route('forgot') }}">Forgot Password?</a></p>
        </div>  
        <button type="submit" class="auth_button">Login</button>
    </form>
</div>
</div>
@endsection
