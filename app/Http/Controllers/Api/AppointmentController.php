<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Client;
use App\Models\Expert;

class AppointmentController extends Controller
{
    public function create()
    {
        $clients = Client::all();
        $experts = Expert::all();
        return view('appointments.create', compact('clients', 'experts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'expert_id' => 'required|exists:experts,id',
            'appointment_date' => 'required|date',
            'remarks' => 'nullable|string',
        ]);

        Appointment::create($validatedData);

        return redirect()->route('appointments.create')->with('success', 'Appointment created successfully');
    }
}
