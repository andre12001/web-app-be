<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'hours_worked' => 'required|numeric|min:0',
            'hourly_rate' => 'required|numeric|min:0',
        ]);

        $hoursWorked = $request->input('hours_worked');
        $hourlyRate = $request->input('hourly_rate');

        $overtimeHours = max(0, $hoursWorked - 40);
        $regularHours = min(40, $hoursWorked);

        $regularPay = $regularHours * $hourlyRate;
        $overtimePay = $overtimeHours * ($hourlyRate * 1.5);

        $totalPay = $regularPay + $overtimePay;

        return view('result', compact('hoursWorked', 'hourlyRate', 'regularPay', 'overtimePay', 'totalPay'));
    }
}
