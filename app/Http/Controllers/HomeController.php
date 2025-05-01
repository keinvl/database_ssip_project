<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $staffs = Staff::with('services')->get(); // ambil data staff beserta servicenya
        $services = Service::all(); // ambil semua service, bisa di-limit jika perlu

        return view('pages.index', compact('staffs', 'services')); // kirim ke view index
    }
}
