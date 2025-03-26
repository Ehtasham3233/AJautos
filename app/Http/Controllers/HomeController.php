<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch counts from database
        $customersCount = DB::table('customers')->count();
        $suppliersCount = DB::table('suppliers')->count();
        $carsCount = DB::table('cars')->count();
        $salesInvoicesCount = DB::table('sale_invoices')->count();
        $purchaseInvoicesCount = DB::table('purchase_invoices')->count();

        // Pass data to the view
        return view('home', compact(
            'customersCount',
            'suppliersCount',
            'carsCount',
            'salesInvoicesCount',
            'purchaseInvoicesCount'
        ));
    }
}
