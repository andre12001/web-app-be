<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
</head>
<body>
    <h1>Salary Calculator</h1>
    <form action="{{ route('salary.calculate') }}" method="POST">
        @csrf
        <label for="hours_worked">Hours Worked:</label>
        <input type="number" id="hours_worked" name="hours_worked" required>
        <br><br>
        <label for="hourly_rate">Hourly Rate:</label>
        <input type="number" id="hourly_rate" name="hourly_rate" step="0.01" required>
        <br><br>
        <button type="submit">Calculate Salary</button>
    </form>
</body>
</html>
