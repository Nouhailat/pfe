<!-- resources/views/appointment.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book an Appointment</div>

                    <div class="card-body">
                        <form action="{{ route('submitAppointment') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                            </div>

                            <div class="form-group">
                                <label for="cne">CNE:</label>
                                <input type="text" class="form-control" id="cne" name="cne" required>
                            </div>

                            <div class="form-group">
                                <label for="appointment_date">Appointment Date:</label>
                                <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Book Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
