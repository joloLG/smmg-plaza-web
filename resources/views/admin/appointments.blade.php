@extends('layouts.main')

@section('styles')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
@endsection

@section('content')
<div class="container">
    <h3>Appointments Calendar</h3>
    <div id='calendar' class="bg-white p-3 shadow-sm"></div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: @json($events) // Injects PHP array as JSON
    });
    calendar.render();
  });
</script>
@endsection