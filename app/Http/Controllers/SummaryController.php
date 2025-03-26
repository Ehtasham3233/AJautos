<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use App\Models\PurchaseInvoice;
use App\Models\SaleInvoice;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('SummaryReport', [
            'saleInvoiceCount' => 0,
            'saleInvoiceAmount' => 0,
            'purchaseInvoiceCount' => 0,
            'purchaseInvoiceAmount' => 0
        ]);
    }
    public function reportSummary(Request $request)
    {
        $query = Car::with(['customer', 'invoice' => function($query) {
            $query->select('id', 'car_id', 'amount');
        }]);
        // Date Range Filter
        if ($request->has('range') && !empty($request->range)) {
            $dates = explode(' to ', $request->range);
            if (count($dates) === 2) {
                $query->whereBetween('created_at', [$dates[0], $dates[1]]);
            }
        }

        // Customer Filter
        if ($request->has('customer_id') && !empty($request->customer_id)) {
            $query->where('customer_id', $request->customer_id)->with('invoice');
        }

        $cars = $query->get();
        $customers = Customer::all();

        return view('CustomersReport', compact('cars', 'customers'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $saleInvoiceCount = 0;
        $saleInvoiceAmount = 0;
        $purchaseInvoiceCount = 0;
        $purchaseInvoiceAmount = 0;

        if ($request->has('range')) {
            [$startDate, $endDate] = explode(' to ', $request->input('range'));

            // Sales Invoices
            $saleInvoices = SaleInvoice::whereBetween('created_at', [$startDate, $endDate]);
            $saleInvoiceCount = $saleInvoices->count();
            $saleInvoiceAmount = $saleInvoices->sum('amount');

            // Purchase Invoices
            $purchaseInvoices = PurchaseInvoice::whereBetween('created_at', [$startDate, $endDate]);
            $purchaseInvoiceCount = $purchaseInvoices->count();
            $purchaseInvoiceAmount = $purchaseInvoices->sum('amount');
        }

        return view('SummaryReport', compact(
            'saleInvoiceCount',
            'saleInvoiceAmount',
            'purchaseInvoiceCount',
            'purchaseInvoiceAmount'
        ));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
