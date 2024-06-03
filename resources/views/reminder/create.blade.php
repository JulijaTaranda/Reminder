<!DOCTYPE html>
<html>
<head>
    <title>Create Reminder</title>
</head>
<body>
    <h1>Create Reminder</h1>
    <form method="POST" action="{{ route('reminders.store') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <input type="text" id="message" name="message" required>
        <br>
        <button type="submit">Create Reminder</button>
    </form>
</body>
</html>
