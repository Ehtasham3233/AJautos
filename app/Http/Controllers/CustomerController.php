<?php

namespace App\Http\Controllers;

use App\Models\PurchaseInvoice;
use App\Models\SaleInvoice;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\Customer;
use Yajra\DataTables\DataTables;

//Import Customer model

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::get();
        return view('customers.index',compact('customers'));
    }

    public function customerReports()
    {
        $customers = Customer::get();
        $cars = [];
        return view('CustomersReport',compact('customers','cars'));
    }

    public function getCustomers(Request $request)
    {
        $query = Customer::with('cars');

        return DataTables::of($query)
            ->addColumn('registration_number', function ($customer) {
                return $customer->cars->pluck('registration_number')->implode('<br>') ?: 'N/A';
            })
            ->addColumn('make_model_year', function ($customer) {
                return $customer->cars->map(function ($car) {
                    return "{$car->make} / {$car->model}";
                })->implode('<br>') ?: 'N/A';
            })
            ->addColumn('car_year', function ($customer) {
                return $customer->cars->map(function ($car) {
                    return "{$car->year_of_manufacture}";
                })->implode('<br>') ?: 'N/A';
            })
            ->addColumn('mileage', function ($customer) {
                return $customer->cars->pluck('mileage')->implode('<br>') ?: 'N/A';
            })
            ->addColumn('mot_expiry', function ($customer) {
                return $customer->cars->map(function ($car) {
                    return isset($car->data['motExpiryDate'])
                        ? \Carbon\Carbon::parse($car->data['motExpiryDate'])->format('F d, Y')
                        : 'N/A';
                })->implode('<br>') ?: 'N/A';
            })
            ->addColumn('tax_due', function ($customer) {
                return $customer->cars->map(function ($car) {
                    return isset($car->data['taxDueDate'])
                        ? \Carbon\Carbon::parse($car->data['taxDueDate'])->format('F d, Y')
                        : 'N/A';
                })->implode('<br>') ?: 'N/A';
            })
            ->addColumn('phone', function ($customer) {
                return $customer->phone ?? 'N/A';
            })
            ->addColumn('address', function ($customer) {
                return $customer->address ?? 'N/A';
            })
            ->addColumn('actions', function ($customer) {
                return '<a class="btn btn-sm" style="width: 5px"><i class="fas fa-eye" style="color: #90D43A"></i></a>
            <a class="btn btn-sm" style="width: 5px"><i class="fas fa-edit" style="color: #90D43A"></i></a>
            <button class="btn btn-sm delete-btn" style="width: 5px" data-id="'.$customer->id.'"><i class="fa fa-trash" style="color: #90D43A"></i></button>';
            })

            ->rawColumns(['registration_number', 'make_model_year','car_year', 'mileage', 'mot_expiry', 'tax_due', 'actions'])
            ->make(true);
    }
    public function getSuppliers(Request $request)
    {
        $query = Supplier::select('id', 'name', 'phone', 'email', 'address')->get();

        return DataTables::of($query)
            ->addColumn('name', function ($supplier) {
                return '<a href="' . url('/get-suppliers-invoice/' . $supplier->id) . '" class="supplier-name" style="color: #90D43A;" onmouseover="this.style.color=\'#007bff\'" onmouseout="this.style.color=\'#90D43A\'">' . e($supplier->name) .
                    '</a>';
            })
            ->addColumn('actions', function ($supplier) {
                return '<a class="btn btn-sm" style="width: 5px"><i class="fas fa-eye" style="color: #90D43A"></i></a>
            <a class="btn btn-sm" style="width: 5px"><i class="fas fa-edit" style="color: #90D43A"></i></a>
            <button class="btn btn-sm delete-btn" style="width: 5px" data-id="'.$supplier->id.'"><i class="fa fa-trash" style="color: #90D43A"></i></button>';
            })
            ->rawColumns(['name', 'actions'])
            ->make(true);
    }
    public function getSuppliersInvoices($id)
    {
        $suppliers = Supplier::get();
        $invoices = PurchaseInvoice::where('supplier_id', $id)
            ->with('supplier:id,name,phone') // Supplier ka naam aur phone fetch karne ke liye
            ->get();

        return view('PurchaseInvoises', compact('invoices','suppliers'));
    }
    public function SaleInvoicesDetail($id)
    {

        $invoices =   SaleInvoice::with(['car.customer','car'])->whereId($id)->first();


        return view('layouts.SaleInvoiceDetail', compact('invoices'));
    }
   public function saleInvoices()
   {
       return  view('layouts.SaleInvoices');

   }
    public function listSaleInvoices()
    {
        $query = SaleInvoice::with(['car.customer','car'])
            ->get();

        return DataTables::of($query)
            ->addColumn('id', function ($invoice) {
                return '<a href="' . url('/get-SaleInvoices/' . $invoice->id) . '" class="supplier-name" style="color: #90D43A;" onmouseover="this.style.color=\'#007bff\'" onmouseout="this.style.color=\'#90D43A\'">' . e('AJ-2025-'.$invoice->id) .
                    '</a>';
            })
            ->addColumn('registrationNumber', function ($invoice) {
                return $invoice->car->registration_number ?? '-';
            })
            ->addColumn('customer_name', function ($invoice) {
                return $invoice->car->customer->name ?? '-';
            })
            ->addColumn('customer_phone', function ($invoice) {
                return $invoice->car->customer->phone ?? '-';
            })
            ->addColumn('make_year', function ($invoice) {
                return $invoice->car->make . ' / ' . $invoice->car->year_of_manufacture;
            })
            ->addColumn('amount', function ($invoice) {
                return '€' . number_format($invoice->amount, 2);
            })
            ->addColumn('date', function ($invoice) {
                return $invoice->created_at ? \Carbon\Carbon::parse($invoice->created_at)->format('d-m-Y') : '-';
            })
            ->addColumn('actions', function ($invoice) {
                return '<a class="btn btn-sm" style="width: 5px"><i class="fas fa-eye" style="color: #90D43A"></i></a>
                    <a class="btn btn-sm" style="width: 5px"><i class="fas fa-edit" style="color: #90D43A"></i></a>
                    <button class="btn btn-sm delete-btn" style="width: 5px" data-id="'.$invoice->id.'">
                        <i class="fa fa-trash" style="color: #90D43A"></i>
                    </button>';
            })
            ->rawColumns(['actions','id'])
            ->make(true);
    }

    public function purchaseInvoicesList()
    {
        $query = PurchaseInvoice::with('supplier')->get();

        return view('layouts.PurchaseInvoicesList');
    }
    public function listPurchaseInvoices()
    {
        $query = PurchaseInvoice::with('supplier')->get();

        return DataTables::of($query)
            ->addColumn('created_at', function ($query) {
                return $query->created_at ? \Carbon\Carbon::parse($query->created_at)->format('d-m-Y') : '-';
            })
            ->addColumn('actions', function ($invoice) {
                return '<a class="btn btn-sm" style="width: 5px">
                        <i class="fas fa-eye" style="color: #90D43A"></i>
                    </a>
                    <a class="btn btn-sm" style="width: 5px">
                        <i class="fas fa-edit" style="color: #90D43A"></i>
                    </a>
                    <button class="btn btn-sm delete-btn" style="width: 5px" data-id="'.$invoice->id.'">
                        <i class="fa fa-trash" style="color: #90D43A"></i>
                    </button>';

            })
            ->rawColumns(['actions','created_at'])
            ->make(true);
    }




}
