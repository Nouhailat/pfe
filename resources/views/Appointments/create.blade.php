<!-- resources/views/appointments/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Schedule an Appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Schedule an Appointment</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="client_id">Client</label>
            <select name="client_id" id="client_id" class="form-control" required>
                <option value="">Select Client</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }} {{ $client->first_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="expert_id">Expert</label>
            <select name="expert_id" id="expert_id" class="form-control" required>
                <option value="">Select Expert</option>
                @foreach($experts as $expert)
                    <option value="{{ $expert->id }}">{{ $expert->name }} {{ $expert->first_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="appointment_date">Appointment Date</label>
            <input type="datetime-local" name="appointment_date" id="appointment_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea name="remarks" id="remarks" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Schedule Appointment</button>
    </form>
</div>
</body>
</html>
