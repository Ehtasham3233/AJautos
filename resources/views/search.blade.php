@extends('layouts.master')

@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper  p-0">
            <div class="content-header row">
</div>
<div class="content-body">
    <!-- users list start -->
    <section class="app-user-list">
        <!-- list and filter start -->
        <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title">Search & Filter</h4>
                <div class="row">
                    <div class="col-md-6 car_number">
                        <form action="searchDVLA" method="GET" id="regNumberForm">
                        <label class="form-label" for="CarNumber">Car Reg Number</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="CarNumber" class="form-control" name="registration_number" placeholder="Enter Registration Number" required/>
                            <button type="submit" class="input-group-text"><i data-feather="search"></i></button>
                        </div>
                        </form>
                    </div>
                    <div class="col-md-6 customer_name">
                        <label class="form-label" for="CustomerName">Customer Name</label>
                        <select id="CustomerName" class="form-select text-capitalize mb-md-0 mb-2">
                            <option></option>
                                                            
                                                            <option value="atif">atif</option>
                                                            <option value="kausar">kausar</option>
                                                    </select>
                    </div>
                </div>
            </div>
            <div class="card-datatable table-responsive pt-0">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"><div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-lg-8 ps-xl-75 ps-0"><div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"><div class="me-1"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div><div class="dt-buttons d-inline-flex mt-50"><button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link font-small-4 me-50"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Export</span></button> </div></div></div></div><table class="user-list-table table no-footer dataTable dtr-column collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 770px;">
                    <thead class="table-light">
                        <tr role="row"><th class="control sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 1px;" aria-label=""></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 32px;" aria-label="#: activate to sort column ascending">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 78px;" aria-label="Customer: activate to sort column ascending">Customer</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 92px;" aria-label="Phone: activate to sort column ascending">Phone</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 53px;" aria-label="Car Make / Model / Year: activate to sort column ascending">Car Make / Model / Year</th><th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 103px;" aria-label="Registration Number: activate to sort column ascending" aria-sort="descending">Registration Number</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 63px;" aria-label="Amount: activate to sort column ascending">Amount</th><th class="text-center sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Actions">Actions</th></tr>
                    </thead>
                <tbody><tr class="odd"><td class=" control" tabindex="0" style=""></td><td>AJ-2025-9</td><td>AFTAB</td><td>07809668698</td><td>TOYOTA 2008</td><td class="sorting_1"><a href="javascript:findCarDetails('BF58FLP')">BF58FLP</a></td><td>£370</td><td style="display: none;"><div class="btn-group"><a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a><div class="dropdown-menu dropdown-menu-end"><a href="sales/9" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 me-50"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Details</a><a href="sales/9/edit" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Edit</a><a href="javascript:;" class="dropdown-item delete-record"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>Delete</a></div></div></td></tr></tbody></table><div class="d-flex justify-content-between mx-2 row mb-1"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">&nbsp;</a></li></ul></div></div></div></div>
            </div>
        </div>
        <!-- list and filter end -->
    </section>
    <!-- users list ends -->
    <!-- Car Details -->
    <section id="car-details"></section>
</div>
        </div>
    </div>
    <!-- END: Content-->
     <!-- BEGIN: Vendor JS-->
    <script src="https://ajautosltd.com/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="https://ajautosltd.com/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="https://ajautosltd.com/app-assets/js/core/app-menu.js"></script>
    <script src="https://ajautosltd.com/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- BEGIN: Page JS-->
    <script src="https://ajautosltd.com/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
<script src="https://ajautosltd.com/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
<script>
    $(function () {
        ('use strict');

        var dtUserTable = $('.user-list-table'),
            carNumberForm = $('#regNumberForm'),
            customerName = $('#CustomerName'),
            carDetails = $('#car-details');

        if (customerName.length) {
            customerName.wrap('<div class="position-relative"></div>');
            customerName.select2({
                dropdownAutoWidth: true,
                width: '100%',
                placeholder: 'Select Customer Name',
                dropdownParent: customerName.parent()
            });

            customerName.on('change', function () {
                $this = $(this);
                if(dtUserTable != null){
                    dtUserTable.DataTable().destroy();
                }
                dtUserTable.DataTable({
                    ajax:{
                        url: "https://ajautosltd.com/searchCustomerName",
                        dataType: "json",
                        type: "GET",
                        data:{ customerName: $this.val()}
                    },
                    columns: [
                        // columns according to JSON
                        { data: '' },
                        { data: 'id' },
                        { data: 'name' },
                        { data: 'phone' },
                        { data: 'cardata' },
                        { data: 'registration_number' },
                        { data: 'details' },
                        { data: 'amount' },
                        { data: '' }
                    ],
                    columnDefs: [
                        {
                            // For Responsive
                            className: 'control',
                            orderable: false,
                            responsivePriority: 2,
                            targets: 0,
                            render: function (data, type, full, meta) {
                                return '';
                            }
                        },
                        {
                            // Invoice Id
                            targets: 1,
                            render: function (data, type, full, meta) {
                                $id = "AJ-" + 2025 + "-" + full['id'];
                                return $id;
                            }
                        },
                        {
                            // Customer Name
                            targets: 2,
                            responsivePriority: 4,
                            render: function (data, type, full, meta) {
                                $name = full['name'];
                                return $name;
                            }
                        },
                        {
                            // Customer Phone
                            targets: 3,
                            render: function (data, type, full, meta) {
                                $phone = full['phone'];
                                return $phone;
                            }
                        },
                        {
                            // Customer Car
                            targets: 4,
                            render: function (data, type, full, meta) {
                                $car = full['cardata'];
                                return $car ;
                            }
                        },
                        {
                            // Customer Car Number
                            targets: 5,
                            render: function (data, type, full, meta) {
                                $car_number = full['registration_number'];
                                return `<a href="javascript:findCarDetails('`+$car_number+`')">`+$car_number+`</a>` ;
                            }
                        },
                        {
                            // Customer Invoice Details
                            targets: 6,
                            visible: false,
                            render: function (data, type, full, meta) {
                                $details = full['details'];
                                return $details ;
                            }
                        },
                        {
                            // Amount
                            targets: 7,
                            render: function (data, type, full, meta) {
                                $amount = full['amount'];
                                return "£"+$amount ;
                            }
                        },
                        {
                        // Actions
                        targets: -1,
                        title: 'Actions',
                        orderable: false,
                        render: function (data, type, full, meta) {
                            $path1 = 'sales/'+full['id'];
                            $path = 'sales/'+full['id']+'/edit';
                            return (
                            '<div class="btn-group">' +
                            '<a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-end">' +
                            '<a href="' +
                            $path1 +
                            '" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
                            'Details</a>' +
                            '<a href="' +
                            $path +
                            '" class="dropdown-item">' +
                            feather.icons['edit'].toSvg({ class: 'font-small-4 me-50' }) +
                            'Edit</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
                            'Delete</a></div>' +
                            '</div>' +
                            '</div>'
                            );
                        }
                        }
                    ],
                    order: [[5, 'desc']],
                    dom:
                        '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                        '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                        '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                        '>t' +
                        '<"d-flex justify-content-between mx-2 row mb-1"' +
                        '<"col-sm-12 col-md-6"i>' +
                        '<"col-sm-12 col-md-6"p>' +
                        '>',
                    // Buttons with Dropdown
                    buttons: [
                        {
                        extend: 'collection',
                        className: 'btn btn-outline-secondary dropdown-toggle me-2',
                        text: feather.icons['external-link'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
                        buttons: [
                            {
                            extend: 'print',
                            text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            }
                        ],
                            init: function (api, node, config) {
                                $(node).removeClass('btn-secondary');
                                $(node).parent().removeClass('btn-group');
                                setTimeout(function () {
                                $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex mt-50');
                                }, 50);
                            }
                        }
                    ],
                    // For responsive popup
                    responsive: {
                        details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                            var data = row.data();
                            return 'Details of ' + data['car_number'] + ' ' + data['name'];
                            }
                        }),
                        type: 'column',
                        renderer: function (api, rowIdx, columns) {
                            var data = $.map(columns, function (col, i) {
                            return col.columnIndex !== 6 // ? Do not show row in modal popup if title is blank (for check box)
                                ? '<tr data-dt-row="' +
                                    col.rowIdx +
                                    '" data-dt-column="' +
                                    col.columnIndex +
                                    '">' +
                                    '<td>' +
                                    col.title +
                                    ':' +
                                    '</td> ' +
                                    '<td>' +
                                    col.data +
                                    '</td>' +
                                    '</tr>'
                                : '';
                            }).join('');
                            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
                        }
                        }
                    },
                    language: {
                        paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                        }
                    }
                });

            });
        }

        carNumberForm.submit(function(e){
            e.preventDefault();
            var regNumber = $('#CarNumber').val();
            if(dtUserTable != null){
                    dtUserTable.DataTable().destroy();
                }
                dtUserTable.DataTable({
                    ajax:{
                        url: "https://ajautosltd.com/searchCarNumber",
                        dataType: "json",
                        type: "GET",
                        data:{ carNumber: regNumber}
                    },
                    columns: [
                        // columns according to JSON
                        { data: '' },
                        { data: 'id' },
                        { data: 'name' },
                        { data: 'phone' },
                        { data: 'cardata' },
                        { data: 'registration_number' },
                        { data: 'details' },
                        { data: 'amount' },
                        { data: '' }
                    ],
                    columnDefs: [
                        {
                            // For Responsive
                            className: 'control',
                            orderable: false,
                            responsivePriority: 2,
                            targets: 0,
                            render: function (data, type, full, meta) {
                                return '';
                            }
                        },
                        {
                            // Invoice Id
                            targets: 1,
                            render: function (data, type, full, meta) {
                                $id = "AJ-" + 2025 + "-" + full['id'];
                                return $id;
                            }
                        },
                        {
                            // Customer Name
                            targets: 2,
                            responsivePriority: 4,
                            render: function (data, type, full, meta) {
                                $name = full['name'];
                                return $name;
                            }
                        },
                        {
                            // Customer Phone
                            targets: 3,
                            render: function (data, type, full, meta) {
                                $phone = full['phone'];
                                return $phone;
                            }
                        },
                        {
                            // Customer Car
                            targets: 4,
                            render: function (data, type, full, meta) {
                                $car = full['cardata'];
                                return $car ;
                            }
                        },
                        {
                            // Customer Car Number
                            targets: 5,
                            render: function (data, type, full, meta) {
                                $car_number = full['registration_number'];
                                return `<a href="javascript:findCarDetails('`+$car_number+`')">`+$car_number+`</a>` ;
                            }
                        },
                        {
                            // Customer Invoice Details
                            targets: 6,
                            visible: false,
                            render: function (data, type, full, meta) {
                                $details = full['details'];
                                return $details ;
                            }
                        },
                        {
                            // Amount
                            targets: 7,
                            render: function (data, type, full, meta) {
                                $amount = full['amount'];
                                return "£"+$amount ;
                            }
                        },
                        {
                        // Actions
                        targets: -1,
                        title: 'Actions',
                        orderable: false,
                        render: function (data, type, full, meta) {
                            $path1 = 'sales/'+full['id'];
                            $path = 'sales/'+full['id']+'/edit';
                            return (
                            '<div class="btn-group">' +
                            '<a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-end">' +
                            '<a href="' +
                            $path1 +
                            '" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
                            'Details</a>' +
                            '<a href="' +
                            $path +
                            '" class="dropdown-item">' +
                            feather.icons['edit'].toSvg({ class: 'font-small-4 me-50' }) +
                            'Edit</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
                            'Delete</a></div>' +
                            '</div>' +
                            '</div>'
                            );
                        }
                        }
                    ],
                    order: [[5, 'desc']],
                    dom:
                        '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                        '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                        '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                        '>t' +
                        '<"d-flex justify-content-between mx-2 row mb-1"' +
                        '<"col-sm-12 col-md-6"i>' +
                        '<"col-sm-12 col-md-6"p>' +
                        '>',
                    // Buttons with Dropdown
                    buttons: [
                        {
                        extend: 'collection',
                        className: 'btn btn-outline-secondary dropdown-toggle me-2',
                        text: feather.icons['external-link'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
                        buttons: [
                            {
                            extend: 'print',
                            text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            },
                            {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
                            className: 'dropdown-item',
                            exportOptions: { columns: [1, 2, 3, 4, 5] }
                            }
                        ],
                            init: function (api, node, config) {
                                $(node).removeClass('btn-secondary');
                                $(node).parent().removeClass('btn-group');
                                setTimeout(function () {
                                $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex mt-50');
                                }, 50);
                            }
                        }
                    ],
                    // For responsive popup
                    responsive: {
                        details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                            var data = row.data();
                            return 'Details of ' + data['car_number'] + ' ' + data['name'];
                            }
                        }),
                        type: 'column',
                        renderer: function (api, rowIdx, columns) {
                            var data = $.map(columns, function (col, i) {
                            return col.columnIndex !== 6 // ? Do not show row in modal popup if title is blank (for check box)
                                ? '<tr data-dt-row="' +
                                    col.rowIdx +
                                    '" data-dt-column="' +
                                    col.columnIndex +
                                    '">' +
                                    '<td>' +
                                    col.title +
                                    ':' +
                                    '</td> ' +
                                    '<td>' +
                                    col.data +
                                    '</td>' +
                                    '</tr>'
                                : '';
                            }).join('');
                            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
                        }
                        }
                    },
                    language: {
                        paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                        }
                    }
                });
            findCarDetails(regNumber);
        })
    });

    function findCarDetails(regNumber){
       
        var carDetails = $('#car-details');

        $.get( "https://ajautosltd.com/searchDVLA",{ registration_number : regNumber}, function( data ) {
            data = JSON.parse(data);
            console.log(data);
            var p = "";
            $.each(data,function(key,value){
                switch(key){
                    case 'registrationNumber':
                        p += '<div class="col-md-4 d-flex justify-content-between"><span class="text-capitalize">' + key + '</span><span>' + value + '</span></div>';
                        break;
                    case 'motExpiryDate':
                        d = new Date(value);
                        p += '<div class="col-md-4 d-flex justify-content-between"><span class="text-capitalize">' + key + '</span><span>' + d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear() + '</span></div>';
                        break;
                    case 'taxDueDate':
                        d = new Date(value);
                        p += '<div class="col-md-4 d-flex justify-content-between"><span class="text-capitalize">' + key + '</span><span>' + d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear() + '</span></div>';
                        break;
                    case 'make':
                        p += '<div class="col-md-4 d-flex justify-content-between"><span class="text-capitalize">' + key + '</span><span>' + value + '</span></div>';
                        break;
                    case 'yearOfManufacture':
                        p += '<div class="col-md-4 d-flex justify-content-between"><span class="text-capitalize">' + key + '</span><span>' + value + '</span></div>';
                        break;
                    case 'engineCapacity':
                        p += '<div class="col-md-4 d-flex justify-content-between"><span class="text-capitalize">' + key + '</span><span>' + value + '</span></div>';
                        break;
                    case 'fuelType':
                        p += '<div class="col-md-4 d-flex justify-content-between"><span class="text-capitalize">' + key + '</span><span>' + value + '</span></div>';
                        break;
                }
            });
            carDetails.empty();
            carDetails.append(
                '<div class="card">' +
                    '<div class="card-body">' +
                        '<h4 class="card-title">Car Details</h4>' +
                        '<div class="row">' +
                            p +
                        '</div>' +
                    '</div>' +
                '</div>'
            )
        });
    }
</script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
            var isRtl = $('html').attr('data-textdirection') === 'rtl';

            // On load Toast
                                })
        
        
    </script>
@endsection
