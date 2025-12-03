@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Medical History (My Appointments)</h3>
    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>Date</th>
                <th>Concern</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appt)
            <tr>
                <td>{{ $appt->appointment_date }}</td>
                <td>{{ $appt->concern }}</td>
                <td>
                    <span class="badge {{ $appt->status == 'Approved' ? 'bg-success' : 'bg-warning' }}">
                        {{ $appt->status }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection