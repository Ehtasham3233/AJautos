@extends('layouts.master')

@section('content')
<div class="app-content content">
        <div class="content-body">
    
        
            <!-- Car list -->
            <section class="app-user-list">
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"><div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-lg-8 ps-xl-75 ps-0"><div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"><div class="me-1"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div><div class="dt-buttons d-inline-flex mt-50"> <button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true" aria-expanded="true"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link font-small-4 me-50"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Export</span></button><div class="dt-button-background" style=""></div><div class="dt-button-collection" style="top: 58.375px; left: 794.681px;"><div role="menu">     <button class="dt-button buttons-print dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer font-small-4 me-50"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>Print</span></button> <button class="dt-button buttons-csv buttons-html5 dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 me-50"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Csv</span></button> <button class="dt-button buttons-excel buttons-html5 dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file font-small-4 me-50"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>Excel</span></button> <button class="dt-button buttons-pdf buttons-html5 dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard font-small-4 me-50"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>Pdf</span></button> <button class="dt-button buttons-copy buttons-html5 dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy font-small-4 me-50"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy</span></button> </div></div> <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>Add New Car</span></button> </div></div></div></div><table class="user-list-table table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead class="table-light">
                                <tr role="row">
                                    <th class="control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 6.31944px;"></th><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 24.9583px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Registration Number: activate to sort column ascending" style="width: 194.194px;">Registration Number</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Owned By: activate to sort column ascending" style="width: 189.486px;">Owned By</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Make/Model/Year: activate to sort column ascending" style="width: 162.361px;">Make/Model/Year</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mileage: activate to sort column ascending" style="width: 76.9028px;">Mileage</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="MOT Expiry Date: activate to sort column ascending" style="width: 161.958px;">MOT Expiry Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tax Due Date: activate to sort column ascending" style="width: 158.597px;">Tax Due Date</th></tr>
                                    
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
                                        <td>{{ !empty($carData['motExpiryDate']) ? \Carbon\Carbon::parse($carData['motExpiryDate'])->format('F d, Y') : 'N/A' }}</td>
                                        <td>{{ !empty($carData['taxDueDate']) ? \Carbon\Carbon::parse($carData['taxDueDate'])->format('F d, Y') : 'N/A' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Add Car Modal -->
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
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">
                                    {{ $customer->name }} ({{ $customer->email }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Registration Number</label>
                        <input type="text" class="form-control" name="registration_number" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Make</label>
                        <input type="text" class="form-control" name="make" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Model</label>
                        <input type="text" class="form-control" name="model">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Year of Manufacture</label>
                        <input type="number" class="form-control" name="year_of_manufacture" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Mileage</label>
                        <input type="number" class="form-control" name="mileage">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">MOT Expiry Date</label>
                        <input type="date" class="form-control" name="motExpiryDate">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Tax Due Date</label>
                        <input type="date" class="form-control" name="taxDueDate">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- BEGIN Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- END Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/tables/table-datatables-basic.min.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function(){
            if (feather) {
                feather.replace({ width: 14, height: 14 });
            }
        });
    </script>
    <script>
    $(document).ready(function() {
        $('#carsTable').DataTable();
    });
</script>


<script>
    $(function () {
        'use strict';

        var dtUserTable = $('.user-list-table'),
            select = $('#customer-name');

        if (select.length) {
            select.select2({
                placeholder: 'Select Customer',
            });
        }

        dtUserTable.DataTable({
            columnDefs: [
                { className: 'control', orderable: false, responsivePriority: 2, targets: 0 },
                { targets: 1, responsivePriority: 4 },
                { targets: 2 },
                { targets: 3 },
                { targets: 4 },
                { targets: 5 },
                { targets: 6 }
            ],
            order: [[1, 'asc']],
            dom: '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                 '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                 '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                 '>t' +
                 '<"d-flex justify-content-between mx-2 row mb-1"' +
                 '<"col-sm-12 col-md-6"i>' +
                 '<"col-sm-12 col-md-6"p>' +
                 '>',
            buttons: [
                {
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle me-2',
                    text: feather.icons['external-link'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
                    buttons: [
                        { extend: 'print', text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print', className: 'dropdown-item', exportOptions: { columns: [2, 3, 4, 5, 6] } },
                        { extend: 'csv', text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv', className: 'dropdown-item', exportOptions: { columns: [2, 3, 4, 5, 6] } },
                        { extend: 'excel', text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel', className: 'dropdown-item', exportOptions: { columns: [2, 3, 4, 5, 6] } },
                        { extend: 'pdf', text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf', className: 'dropdown-item', exportOptions: { columns: [2, 3, 4, 5, 6] } },
                        { extend: 'copy', text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy', className: 'dropdown-item', exportOptions: { columns: [2, 3, 4, 5, 6] } }
                    ],
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                        $(node).parent().removeClass('btn-group');
                        setTimeout(function () {
                            $(node).closest('.dt-buttons').removeClass('btn-group')
                                .addClass('d-inline-flex mt-50');
                        }, 50);
                    }
                },
                {
                    text: 'Add New Car',
                    className: 'add-new btn btn-primary',
                    attr: { 'data-bs-toggle': 'modal', 'data-bs-target': '#modals-slide-in' },
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            language: {
                paginate: {
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
    });
</script>

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
        var isRtl = $('html').attr('data-textdirection') === 'rtl';
    });
</script>

@endsection
