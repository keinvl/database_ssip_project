@extends('authentication')

@section('content')
<div class="auth_body">
<div class="auth_box">
    <h2 class="forgot__title">Reset Password</h2>

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

    <form method="POST" action="{{ route('forgot.submit') }}">
        @csrf
        <input type="email" name="email" class="auth_input" placeholder="Enter your email" required>
        <input type="password" name="password" class="auth_input" placeholder="Enter new password" required>
        <input type="password" name="password_confirmation" class="auth_input" placeholder="Re-enter new password" required>
        <button type="submit" class="auth_button">Reset Password</button>
    </form>

    <p><a href="{{ route('login') }}" class="forgot__back">Back to Login</a></p>
</div>
</div>
@endsection
