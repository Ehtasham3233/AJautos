@extends('layouts.master')

@section('content')
   
<div class="app-content content">
    <div class="content-body">
        <section>
            <div class="row match-height">

                <div class="col-lg-3 col-sm-4 col-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-header flex-column align-items-center pb-0">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users font-medium-5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $customersCount }}</h2>
                                <p class="card-text">Customers</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-4 col-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-header flex-column align-items-center pb-0">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users font-medium-5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $suppliersCount }}</h2>
                                <p class="card-text">Suppliers</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-4 col-12">
                    <a href="https://ajautosltd.com/cars">
                        <div class="card">
                            <div class="card-header flex-column align-items-center pb-0">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key font-medium-5"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $carsCount }}</h2>
                                <p class="card-text">Cars</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-4 col-12">
                    <a href="https://ajautosltd.com/sales">
                        <div class="card">
                            <div class="card-header flex-column align-items-center pb-0">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-medium-5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $salesInvoicesCount }}</h2>
                                <p class="card-text">Sale Invoices</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-4 col-12">
                    <a href="https://ajautosltd.com/purchases">
                        <div class="card">
                            <div class="card-header flex-column align-items-center pb-0">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-medium-5"></svg>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $purchaseInvoicesCount }}</h2>
                                <p class="card-text">Purchase Invoices</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </div>
</div>

  
@endsection
