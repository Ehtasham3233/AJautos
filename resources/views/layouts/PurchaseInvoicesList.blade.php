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
            <div class="content-body">
                <section class="app-user-list">
                    <div class="card">
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table dataTable " id="DataTables_Table_0">
                                <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Supplier</th>
                                    <th>Invoice #</th>
                                    <th>Reg No</th>
                                    <th>Amount</th>
                                    <th>Details</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
{{--    @include('layouts.AddSupplierInvoice')--}}
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
        let table = $('#DataTables_Table_0').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('purchase-invoices.list') }}", // Ensure this route exists
            columns: [
                { data: 'id', name: 'id' },
                { data: 'supplier.name', name: 'supplier.name' },
                { data: 'part_invoice_number', name: 'part_invoice_number' },
                { data: 'car_registration_number', name: 'reg_no' },
                { data: 'amount', name: 'amount' },
                { data: 'details', name: 'details' },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            dom: '<"row mb-2"<"col-md-6 d-flex align-items-center dataTables_length_wrapper"l><"col-md-6 d-flex justify-content-end"Bf>>rtip',

            buttons: [
                { extend: 'print', text: '<i class="fas fa-print"></i> Print', className: 'btn btn-secondary d-none', attr: { id: 'printBtn' } },
                { extend: 'csv', text: '<i class="fas fa-file-csv"></i> CSV', className: 'btn btn-secondary d-none', attr: { id: 'csvBtn' } },
                { extend: 'excel', text: '<i class="fas fa-file-excel"></i> Excel', className: 'btn btn-secondary d-none', attr: { id: 'excelBtn' } },
                { extend: 'pdf', text: '<i class="fas fa-file-pdf"></i> PDF', className: 'btn btn-secondary d-none', attr: { id: 'pdfBtn' } },
                { extend: 'copy', text: '<i class="fas fa-copy"></i> Copy', className: 'btn btn-secondary d-none', attr: { id: 'copyBtn' } }
            ],

            initComplete: function () {
                $('.dataTables_length').append(`
                <button class="btn btn-primary fw-bold text-white ms-3" data-bs-toggle="modal" data-bs-target="#supplierInvoiseModel">
                    Add New Record
                </button>
            `);

                // Adjust margins
                $('.dataTables_length').css('margin-left', '20px');
                $('.dataTables_info').css('margin-left', '20px');
                $('.dataTables_paginate').css('margin-right', '20px');
                $('.dataTables_filter').css('margin-right', '20px');
            }
        });
    });


</script>
