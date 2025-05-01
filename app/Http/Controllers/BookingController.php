<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function show()
    {
        $services = Service::all();
        $bookings = Booking::with('service')->where('user_id', Auth::id())->get();

        return view('pages.booking', compact('services', 'bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'booking_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'service_id' => 'required|exists:services,id',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'customer_name' => $request->customer_name,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'service_id' => $request->service_id,
            'status' => 'requested',
        ]);

        return redirect()->back()->with('success', 'Booking created successfully!');
    }

    public function updateStatus($id)
    {
        $booking = Booking::findOrFail($id);
        if ($booking->status === 'requested') {
            $booking->status = 'booked';
            $booking->save();
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->back();
    }

    public function index()
    {
        $bookings = Booking::with(['user', 'service'])->get();
        return view('admin.bookings', compact('bookings'));
    }
}
