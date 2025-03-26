@extends('layouts.master')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #exportDropdown {
            background-color: white;
            border: 1px solid #82868B;
            transition: all 0.3s ease-in-out;
        }
    </style>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row"></div>
            <div class="content-header-center col-md-8 mx-auto mb-3">
                <h1 class="mb-2 text-center">Customer's Report</h1>
                <div class="col-md-12">
                    <form action="{{ route('customer.reports') }}" method="POST">
                        @csrf
                        <div class="row g-2 align-items-end">
                            <!-- Date Picker -->
                            <div class="col-md-5">
                                <label class="form-label" for="fp-range">Choose Your Dates</label>
                                <input type="text" id="fp-range" name="range" class="form-control flatpickr-range" placeholder="YYYY-MM-DD to YYYY-MM-DD" value="{{ request('range') }}" readonly>
                            </div>

                            <!-- Customer Dropdown -->
                            <div class="col-md-5">
                                <label class="form-label" for="customer_id">Select Customer</label>
                                <select id="customer_id" name="customer_id" class="form-select select2">
                                    <option value="">All Customers</option>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}" {{ request('customer_id') == $customer->id ? 'selected' : '' }}>
                                            {{ $customer->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-md-2 d-grid">
                                <button class="btn btn-outline-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="content-body">
                <section class="app-user-list">
                    <div class="card">
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table dataTable " id="DataTables_Table_0">
                                <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Make/Model/Year</th>
                                    <th>Registration Number</th>
                                    <th>work</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>
                                            <a href="{{url('/get-SaleInvoices/'.$car->invoice->id)}}" style="color: #8CC543; text-decoration: none;"
                                               onmouseover="this.style.color='blue'"
                                               onmouseout="this.style.color='#8CC543'">
                                                AJ-2025-{{ $car->id }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $car->make }} / {{ $carData['make'] ?? 'N/A' }} / {{ $car->year_of_manufacture }}
                                        </td>
                                        <td>{{ $car->registration_number }}</td>

                                        @php
                                            // Ensure $car->data is decoded properly
                                            $carData = is_string($car->data) ? json_decode($car->data, true) : $car->data;
                                        @endphp

                                        <td>
                                            {{ isset($car->invoice->details[0]['work']) ? $car->invoice->details[0]['work'] : 'N/A' }}
                                        </td>

                                        <td>{{ \Carbon\Carbon::parse($car->mot_expiry_date)->format('d-m-Y') }}</td>
                                        <td>£{{ $car->invoice->amount ?? 'N/A' }}</td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
{{--    @include('AddrecordModel')--}}
@endsection
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.min.js"></script>
<script src="../../../app-assets/js/core/app.min.js"></script>
<script src="../../../app-assets/js/scripts/customizer.min.js"></script>

<script>
    $(document).on('click', '#openAddUserModal', function () {
        $('#addUserModal').modal('show');
    });
    $(document).ready(function () {
        $('#DataTables_Table_0').DataTable({
            processing: true,
            serverSide: false, // Server-side off because data is already loaded
            dom: '<"row mb-2"<"col-md-6 d-flex align-items-center dataTables_length_wrapper"l><"col-md-6 d-flex justify-content-end"Bf>>rtip',
            buttons: [
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Print',
                    className: 'btn btn-secondary d-none',
                    attr: { id: 'printBtn' }
                },
                {
                    extend: 'csv',
                    text: '<i class="fas fa-file-csv"></i> CSV',
                    className: 'btn btn-secondary d-none',
                    attr: { id: 'csvBtn' }
                },
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    className: 'btn btn-secondary d-none',
                    attr: { id: 'excelBtn' }
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    className: 'btn btn-secondary d-none',
                    attr: { id: 'pdfBtn' }
                },
                {
                    extend: 'copy',
                    text: '<i class="fas fa-copy"></i> Copy',
                    className: 'btn btn-secondary d-none',
                    attr: { id: 'copyBtn' }
                }
            ],
            initComplete: function () {
                $('.dataTables_filter').after(`
        <div class="d-flex align-items-center">
            <div class="dropdown ms-2">
                <button class="btn btn-white border dropdown-toggle mt-1" style="margin-right: 10px" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-file-export"></i> Export
                </button>
                <ul class="dropdown-menu" aria-labelledby="exportDropdown">
                    <li><a class="dropdown-item" href="#" id="exportPrint"><i class="fas fa-print"></i> Print</a></li>
                    <li><a class="dropdown-item" href="#" id="exportCsv"><i class="fas fa-file-csv"></i> CSV</a></li>
                    <li><a class="dropdown-item" href="#" id="exportExcel"><i class="fas fa-file-excel"></i> Excel</a></li>
                    <li><a class="dropdown-item" href="#" id="exportPdf"><i class="fas fa-file-pdf"></i> PDF</a></li>
                    <li><a class="dropdown-item" href="#" id="exportCopy"><i class="fas fa-copy"></i> Copy</a></li>
                </ul>
            </div>
            <button class="btn btn-primary fw-bold text-white mt-1" style="margin-right: 10px" data-bs-toggle="modal" data-bs-target="#addUserModal">
                 Add User
            </button>
        </div>
    `);

                // Apply top margin to search input
                $('.dataTables_filter').css('margin-top', '3px');

                // Export Buttons Functionality
                $('#exportPrint').click(() => $('#printBtn').click());
                $('#exportCsv').click(() => $('#csvBtn').click());
                $('#exportExcel').click(() => $('#excelBtn').click());
                $('#exportPdf').click(() => $('#pdfBtn').click());
                $('#exportCopy').click(() => $('#copyBtn').click());

                // Left margin adjustment
                $('.dataTables_length').css('margin-left', '20px');
                $('.dataTables_info').css('margin-left', '20px');

                // Right margin for pagination
                $('.dataTables_paginate').css('margin-right', '20px');
            }

        });
    });
    $('form').on('submit', function (e) {
        e.preventDefault();
        table.ajax.reload();
    });
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#fp-range", {
            mode: "range",
            dateFormat: "Y-m-d",
            allowInput: true,
            defaultDate: ["{{ request('start_date') }}", "{{ request('end_date') }}"],
            onClose: function(selectedDates, dateStr, instance) {
                console.log("Selected range: " + dateStr);
            }
        });
    });
</script>
