@extends('layouts.master')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
            <div class="content-wrapper p-0">
                <div class="content-header row"></div>
                    <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75">
                        <div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                <label>Show 
                                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-8 ps-xl-75 ps-0">
                                <div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap">
                                    <div class="me-1">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="dt-buttons d-inline-flex mt-50"> 
                                        <button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link font-small-4 me-50">
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                                <polyline points="15 3 21 3 21 9"></polyline>
                                                <line x1="10" y1="14" x2="21" y2="3"></line>
                                                </svg>
                                                Export
                                            </span></button> <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>Add New Car</span></button> </div></div></div></div>
                        <div class="content-body">
                            <!-- users list start -->
                            <section class="app-user-list">
                                <!-- list and filter start -->
                                <div class="card">
                                    <div class="card-datatable table-responsive pt-0">
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                            <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75">
                                                <table class="user-list-table table">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th></th>
                                                            <th>#</th>
                                                            <th>Registration Number</th>
                                                            <th>Owned By</th>
                                                            <th>Make/Model/Year</th>
                                                            <th>Mileage</th>
                                                            <th>MOT Expiry Date</th>
                                                            <th>Tax Due Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($cars as $key => $car)
                                                            @php
                                                                $carData = is_array($car->data) ? $car->data : json_decode($car->data, true);
                                                            @endphp
                                                                <tr>
                                                                    <td></td>
                                                                    <td>{{ $key + 1 }}</td>
                                                                    <td>{{ $car->registration_number }}</td>
                                                                    <td>{{ $car->customer->name ?? 'N/A' }}</td>
                                                                    <td>{{ $car->make }} / {{ $car->model ?? 'N/A' }} / {{ $car->year_of_manufacture }}</td>
                                                                    <td>{{ $car->mileage ?? 'N/A' }}</td>
                                                                    <td>
                                                                        {{ !empty($carData['motExpiryDate']) ? \Carbon\Carbon::parse($carData['motExpiryDate'])->format('F d, Y') : 'N/A' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ !empty($carData['taxDueDate']) ? \Carbon\Carbon::parse($carData['taxDueDate'])->format('F d, Y') : 'N/A' }}
                                                                    </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                                <!-- list and filter end -->
                            </section>
                        </div>
            </div>
</div>


    <!-- users list ends -->
    <!-- Modal to add new user starts-->
    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
    <div class="modal-dialog">
        <div class="add-new-user modal-content pt-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Add Customer Car</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <form action="{{ route('cars.store') }}" method="POST">
                    @csrf
                    <div class="mb-1">
                        <label for="customer-name" class="form-label">Customer</label>
                        <select class="form-select" id="customer-name" name="customer_id" required>
                            <option value="">Select Customer</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">
                                    {{ $customer->name }} ({{ $customer->email ?? 'N/A' }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-1 position-relative">
                        <label for="car-number" class="form-label">Car Registration Number</label>
                        <input type="text" class="form-control" id="car-number" name="registration_number"
                            style="text-transform:uppercase" placeholder="LX123" required>
                    </div>
                    <div class="mb-1 position-relative">
                        <label for="car-mileage" class="form-label">Car Mileage</label>
                        <input type="text" class="form-control" id="car-mileage" name="mileage" placeholder="0 km">
                    </div>
                    <div class="mb-1 d-flex flex-wrap mt-2">
                        <button type="submit" class="btn btn-primary me-1">Add</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection