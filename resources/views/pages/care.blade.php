@extends('layout')

@section('title', 'Pet Care')

@section('content')
<style>
    .heading {
        font-family: "Sora";
        font-weight: 700;
        font-size: 3.5rem;
        line-height: 1.19;
        color: #000958;
        margin-bottom: 15px;
    }
</style>
    <section class="service">
        <div class="container">
            <p class="service__subtitle subtitle">What we do for you?</p>
            <h2 class="service__title heading">Our Services</h2>
            <div class="service__body">
                <!-- column 1 -->
                <section class="service__list">
                    
                    <!-- item 1 -->
                    <article class="service__item">
                        <h3 class="service__item-title">Puppy Sitting</h3>
                        <p class="service__item-desc">
                            Helping your new pup to be a good boy or girl
                            isn’t always easy, but we’re here to help.
                        </p>
                        <div class="service__link">
                            <a href="#!" class="service__link-more"
                                >Read More</a
                            >
                            <span class="service__libk-icon"
                                ><img
                                    src=" img/ArrowUpRight.svg"
                                    alt=""
                            /></span>
                        </div>
                    </article>

                    <!-- item 2 -->
                    <article class="service__item">
                        <h3 class="service__item-title">Dog Walking</h3>
                        <p class="service__item-desc">
                            Choose from a 30, 45, or 60-minute visit to give
                            your pet their daily dose of fun-filled.
                        </p>
                        <div class="service__link">
                            <a href="#!" class="service__link-more"
                                >Read More</a
                            >
                            <span class="service__libk-icon"
                                ><img
                                    src=" img/ArrowUpRight.svg"
                                    alt=""
                            /></span>
                        </div>
                    </article>

                    <!-- item 3 -->
                    <article class="service__item">
                        <h3 class="service__item-title">Pet Sitting</h3>
                        <p class="service__item-desc">
                            While you’re away we can make sure your pet has
                            all the food, water, exercise, and, of course.
                        </p>
                        <div class="service__link">
                            <a href="#!" class="service__link-more"
                                >Read More</a
                            >
                            <span class="service__libk-icon"
                                ><img
                                    src=" img/ArrowUpRight.svg"
                                    alt=""
                            /></span>
                        </div>
                    </article>
                </section>

                <!-- column 2 -->
                <div class="service__media">
                    <figure class="service__image">
                        <img
                            src=" img/service-img.png"
                            alt="Service"
                            class="service__img"
                        />
                    </figure>

                    <a href="#!" class="service__btn btn">View All Services</a>
                </div>

                <!-- column 3 -->
                <section class="service__list">
                    <!-- item 1 -->
                    <article class="service__item">
                        <h3 class="service__item-title">Overnight Care</h3>
                        <p class="service__item-desc">
                            If you’re away for the night, we can stay the
                            night or stop by in the evening and morning.
                        </p>
                        <div class="service__link">
                            <a href="#!" class="service__link-more"
                                >Read More</a
                            >
                            <span class="service__libk-icon"
                                ><img
                                    src=" img/ArrowUpRight.svg"
                                    alt=""
                            /></span>
                        </div>
                    </article>
                    <!-- item 2 -->
                    <article class="service__item">
                        <h3 class="service__item-title">Pet Taxi</h3>
                        <p class="service__item-desc">
                            Does your pet need a lift to the groomers, vet,
                            or dog park? We’ve got their tail covered.
                        </p>
                        <div class="service__link">
                            <a href="#!" class="service__link-more"
                                >Read More</a
                            >
                            <span class="service__libk-icon"
                                ><img
                                    src=" img/ArrowUpRight.svg"
                                    alt=""
                            /></span>
                        </div>
                    </article>

                    <!-- item 3 -->
                    <article class="service__item">
                        <h3 class="service__item-title">
                            Pet Medical Admin
                        </h3>
                        <p class="service__item-desc">
                            Our team of experienced professionals can help
                            with everything from pills to injections.
                        </p>
                        <div class="service__link">
                            <a href="#!" class="service__link-more"
                                >Read More</a
                            >
                            <span class="service__libk-icon"
                                ><img
                                    src=" img/ArrowUpRight.svg"
                                    alt=""
                            /></span>
                        </div>
                    </article>
                </section>
            </div>

            <main class="table">
                <section class="table__header">
                    <h2 class="client__title heading">Customer's</h2>
                    <p class="client__subtitle subtitle">Booking Time</p>
                </section>
                <section class="table__body" id="bookingTable">
                    <table>
                        <thead>
                            <tr>
                                <th class="center">Id</th>
                                <th class="center">Customer</th>
                                <th class="center">Date</th>
                                <th class="center">Time</th>
                                <th class="center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                            <tr>
                                <td class="center">{{ $booking->id }}</td>
                                <td class="left">{{ $booking->customer_name }}</td>
                                <td class="align center">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d M, Y') }}</td>
                                <td class="align venter">{{ \Carbon\Carbon::parse($booking->start_time)->format('h:iA') }} - {{ \Carbon\Carbon::parse($booking->end_time)->format('h:iA') }}</td>
                                <td class="center">
                                    <p class="status {{ $booking->status === 'booked' ? 'delivered' : 'requested' }}">{{ ucfirst($booking->status) }}</p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button onclick="document.getElementById('bookingModal').style.display='block'" class="add-button">+</button>
                </section>
            </main>
        </div>
    </section>
    
    <!-- Pop-up Booking Modal -->
    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <h3 class="heading">Add New Booking</h3>
            <form method="POST" action="{{ route('booking.store') }}">
            @csrf
                <label for="customer_name">Name</label>
                <input type="text" name="customer_name" id="customer_name" placeholder="Enter Customer Name" required>

                <label for="booking_date">Date</label>
                <input type="date" name="booking_date" id="booking_date" required>

                <label for="start_time">Start Time</label>
                <input type="time" name="start_time" id="start_time" required>

                <label for="end_time">End Time</label>
                <input type="time" name="end_time" id="end_time" required>

                <label for="service_id">Treatment</label>
                <select name="service_id" id="service_id" required>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>

                <button type="submit" id="submitBooking">Submit Booking</button>
                <button type="button" onclick="document.getElementById('bookingModal').style.display='none'" id="closeModal">Close</button>
            </form>
        </div>
    </div>
@endsection

<script>
    document.getElementById('addNewBooking').addEventListener('click', function () {
        document.getElementById('bookingModal').style.display = 'block';
    });
</script>