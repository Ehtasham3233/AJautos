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
            <div class="container">
            <h2 class="mb-4">Search Results</h2>
            <div class="card">
            <div class="card-body border-bottom">
            <h4 class="card-title">Search & Filter</h4>
            <div class="row">
                <div class="col-md-6">
                    <form id="searchForm">
                        <label class="form-label" for="CarNumber">Car Reg Number</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="CarNumber" class="form-control" name="registration_number" placeholder="Enter Registration Number">
                            <button type="submit" class="input-group-text">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="CustomerName">Customer Name</label>
                    <select id="CustomerName" class="form-select select2">
                        <option value="">Select Customer Name</option>
                        @foreach($customers as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    </div>
    <table id="DataTables_Table_0" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Registration Number</th>
                <th>Customer Name</th>
                <th>Make/Model/Year</th>
                <th>Mileage</th>
                <th>MOT Expiry</th>
                <th>Tax Due</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        let table = $('#DataTables_Table_0').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('search.data') }}",
                type: "GET",
                dataSrc: function (json) {
                        console.log("API Response:", json);
                        return json.data;
                    },
                    error: function (xhr, error, thrown) {
                        console.log("AJAX Error:", xhr.responseText);
                    }
                data: function (d) {
                    d.registration_number = $('#CarNumber').val();
                    d.customer_id = $('#CustomerName').val(); // Ensure it sends correct ID
                }
            },
            columns: [
                { data: "id" },
                { data: "registration_number" },
                { data: "customer_name" }, // This should now return proper data
                { data: "make_model_year" },
                { data: "mileage" },
                { data: "mot_expiry" },
                { data: "tax_due" }
            ]
        });

        // Reload DataTable when the customer dropdown changes
        $('#CustomerName').change(function () {
            console.log('Customer ID Selected:', $(this).val()); // Debugging
            table.ajax.reload();
        });

        // Reload DataTable when the search form is submitted
        $('#searchForm').submit(function (e) {
            e.preventDefault();
            table.ajax.reload();
        });
    });
</script>

@endsection
