@extends('layout')

@section('title', 'Pet Care')

@section('content')

<style>
.table__body {
    background-color: #DFCCB3;
    backdrop-filter: blur(50px);
    font-family: "Sora", sans-serif;

    padding: 2rem;
    width: fit-content;
    max-width: 4000px;
    margin: auto;

    border-radius: 10px;
    overflow-x: auto;
    min-height: 120px;

    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease-in-out;
}

.status-btn {
    min-width: 120px;
    --height: 20px;
    background: #ff5b2e;
    box-shadow: 0px 13px 26px -8px rgba(255, 91, 46, 0.42);
    font-weight: 600;
    font-size: 1.3rem;
    border: none;
    color: #ffffff;
}

.delete-btn {
    min-width: 80px;
    --height: 20px;
    background:#95730e;
    box-shadow: 0px 13px 26px -8px rgba(255, 91, 46, 0.42);
    font-weight: 200;
    font-size: 1.3rem;
    border: none;
    color: #ffffff;
}

</style>

<section class="service">
        <div class="container">
<main class="table">
    <section class="table__header">
        <h2 class="client__title heading">Customer's</h2>
        <p class="client__subtitle subtitle">Booking List</p>
    </section>
    <section class="table__body" id="bookingTable">
                    <table>
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Customer </th>
                                <th> Date </th>
                                <th> Time </th>
                                <th> Status </th>
                                <th> Confirm </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($bookings as $booking)
<tr>
    <td>{{ $booking->id }}</td>
    <td>{{ $booking->customer_name }}</td>
    <td>{{ $booking->booking_date }}</td>
    <td>{{ $booking->start_time }} - {{ $booking->end_time }}</td>
    <td>{{ $booking->status }}</td>
    <td>
        @if($booking->status == 'requested')
            <form action="{{ route('admin.booking.updateStatus', $booking->id) }}" method="POST">
                @csrf
                <button type="submit" class="status-btn btn">Mark as Booked</button>
            </form>
        @endif
    </td>
    <td>
        <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
            @csrf
            <button type="submit" class="delete-btn btn">Delete</button>
        </form>
    </td>
</tr>
@endforeach
                        </tbody>
                    </table>
                </section>
            </main>
</div>
</section>

            @endsection