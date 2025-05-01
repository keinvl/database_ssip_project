@extends('authentication') 

@section('content')
<div class="auth_body">
<div class="auth_box">
    <h2 class="register__title">Register</h2>
    <p class="register__subtitle">Kindly fill in this form to register</p>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label for="name" class="auth_label">Name</label>
        <input type="text" name="name" class="auth_input" placeholder="Enter username" required>

        <label for="email" class="auth_label">Email</label>
        <input type="email" name="email" class="auth_input" placeholder="Enter email" required>

        <label for="password" class="auth_label">Password</label>
        <input type="password" name="password" class="auth_input" placeholder="Enter password" required>

        <label for="password_confirmation" class="auth_label">Repeat Password</label>
        <input type="password" name="password_confirmation" class="auth_input" placeholder="Re-enter password" required>

        <button type="submit" class="auth_button">Create an Account</button>
    </form>

    <p class="register__back">Already have an account? <a href="{{ route('login') }}">Back to Login</a></p>
</div>
</div>
@endsection
