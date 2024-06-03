<!DOCTYPE html>
<html>
<head>
    <title>Reminders</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Reminders</h1>
    <a href="{{ route('reminders.create') }}">Create new Reminder</a>
    <table>
        <caption>Reminders queued for email sending</caption>
        <thead>
            <th>id</th>
            <th>email message</th>
            <th>email address</th>
        </thead>
        @foreach($reminders as $reminder)
        <tr>
            <td>{{ $reminder->id }}. </td>
            <td>{{ $reminder->message }}</td>
            <td>{{ $reminder->email }}</td>
        </tr>
        @endforeach
    </table> 
</body>
</html>
