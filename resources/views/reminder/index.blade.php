<!DOCTYPE html>
<html>
<head>
    <title>Reminders</title>
</head>
<body>
    <h1>Reminders</h1>
    <a href="{{ route('reminders.create') }}">Create new Reminder</a>
    <ul>
        @foreach($reminders as $reminder)
            <li>{{ $reminder->reminder_time }} - {{ $reminder->message }} ({{ $reminder->email }})</li>
        @endforeach
    </ul>
            
</body>
</html>
