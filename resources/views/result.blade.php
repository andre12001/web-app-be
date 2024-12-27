<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Result</title>
</head>
<body>
    <h1>Salary Result</h1>
    <p>Hours Worked: {{ $hoursWorked }}</p>
    <p>Hourly Rate: ${{ number_format($hourlyRate, 2) }}</p>
    <p>Regular Pay: ${{ number_format($regularPay, 2) }}</p>
    <p>Overtime Pay: ${{ number_format($overtimePay, 2) }}</p>
    <h2>Total Pay: ${{ number_format($totalPay, 2) }}</h2>
    <a href="{{ route('salary.index') }}">Calculate Again</a>
</body>
</html>
