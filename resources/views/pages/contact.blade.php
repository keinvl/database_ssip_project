@extends('layout')

@section('title', 'Contact Us')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (session('success'))
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK',
            timer: 3000
        });
    @endif
</script>

<div class="contact">
    <div class="container">
        <h1 class="contact__title" heading>Contact Us</h1> <br>
        <p class="contactp">If you have any complaint, questions, or suggestions, feel free to reach out to us!</p> <br>
        
        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
        @csrf

            <div class="form-field">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>

            <button type="submit" class="contact__submit btn">Send Message</button>
        </form>

        <div class="contactp">
            <p>Email us at: pallpaws@gmail.com</p>
            <p>Call us at: +1234567890</p>
        </div>
    </div>
</div>
@endsection
