<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('customer')->get();
        $customers = Customer::all();

        return view('cars', compact('cars', 'customers'));
    }
    public function getUsers(Request $request)
    {
        $query = Car::with('customer');

        return DataTables::of($query)
            ->addColumn('customer_name', function ($car) {
                return $car->customer->name ?? 'N/A';
            })
            ->addColumn('make_model_year', function ($car) {
                return "{$car->make} / {$car->model} / {$car->year_of_manufacture}";
            })
            ->addColumn('mileage', function ($car) {
                return $car->mileage ?? 'N/A';
            })
            ->addColumn('mot_expiry', function ($car) {
                return isset($car->data['motExpiryDate'])
                    ? \Carbon\Carbon::parse($car->data['motExpiryDate'])->format('F d, Y') : 'N/A';
            })
            ->addColumn('tax_due', function ($car) {
                return isset($car->data['taxDueDate'])
                    ? \Carbon\Carbon::parse($car->data['taxDueDate'])->format('F d, Y') : 'N/A';
            })
            ->make(true);
    }





    public function create()
    {
        $customers = Customer::all();
        return view('cars.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'registration_number' => 'required|string|unique:cars,registration_number',

        ]);

        $requestData = $request->except(['id', '_token','customer_id']);
        $extraData = [
            "taxStatus" => "Taxed",
            "motStatus" => "Valid",
            "engineCapacity" => 1598,
            "co2Emissions" => 140,
            "fuelType" => "PETROL",
            "markedForExport" => false,
            "colour" => "BLUE",
            "typeApproval" => "M1",
            "dateOfLastV5CIssued" => "2021-01-13",
            "wheelplan" => "2 AXLE RIGID BODY",
            "monthOfFirstRegistration" => "2013-03",
        ];

        // Merge request data with extra hardcoded data
        $carData = json_encode(array_merge($requestData, $extraData));
        // Create new car record
        Car::create([
            'customer_id' => $request->customer_id,
            'registration_number' => $request->registration_number,
            'make' => $request->make,
            'model' => $request->model,
            'year_of_manufacture' => $request->year_of_manufacture,
            'mileage' => $request->mileage,
            'mot_expiry_date' => $request->motExpiryDate,
            'tax_due_date' => $request->taxDueDate,
            'data' => $carData, // Storing merged JSON data
        ]);

        return redirect()->back()->with('success', 'Car added successfully.');
    }


}
