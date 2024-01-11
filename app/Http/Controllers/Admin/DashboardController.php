<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Contact;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view('admin.cars.index', compact('cars'));
    }

    public function inbox(){
        $contacts = Contact::all();
        return view('admin.message', compact('contacts'));
    }

    public function destroyMessage($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('inbox')->with('success', 'Your message has been deleted.');
    }

    public function logout(){
        auth()->logout();
        return redirect('login');
    }
}



