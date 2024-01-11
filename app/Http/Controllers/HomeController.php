<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('frontend.homepage', compact('cars'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function message(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'subjek_email' => 'required',
            'pesan' => 'required',
        ]);

        $contact = new Contact();
        $contact->nama_lengkap = $request->nama_lengkap;
        $contact->email = $request->email;
        $contact->subjek_email = $request->subjek_email;
        $contact->pesan = $request->pesan;

        $contact->save();

        return redirect()->route('contact')->with('success', 'Your message has been sent.');
    }

    public function detail($id)
    {   
        $car = Car::find($id);

        if (!$car) {
            // Handle case where car is not found
            abort(404);
        }

        return view('frontend.detail', compact('car'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}
