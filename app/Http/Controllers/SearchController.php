<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Customer;
use DataTables;

class SearchController extends Controller
{
    public function index()
    {
        $customers = Customer::pluck('name', 'id'); // Fetch customers for dropdown
        return view('search', compact('customers'));
    }

    public function getData(Request $request)
    {
        $query = Car::with('customer'); // Ensure relationship is loaded

        // Apply filters
        if ($request->filled('registration_number')) {
            $query->where('registration_number', 'LIKE', "%{$request->registration_number}%");
        }

        if ($request->filled('customer_id')) {
            $query->where('customer_id', $request->customer_id);
        }

        return DataTables::of($query)
            ->addColumn('customer_name', function ($car) {
                return $car->customer->name ?? 'N/A'; // Avoid errors if no customer
            })
            ->make(true);
    }
}
