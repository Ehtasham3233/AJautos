@extends('layouts.master')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper p-0">
            <div class="content-header row">
                <div class="content-header-center col-md-4 offset-md-4 d-flex flex-column align-items-center mb-2">
                    <h1 class="mb-2">Summary Report</h1>
                    <div class="col-md-12 mb-1">
                        <form action="{{ route('report-summary') }}" method="POST">
                            @csrf
                            <label class="form-label" for="fp-range">Choose Your Dates</label>
                            <div class="input-group">
                                <input type="text" id="fp-range" name="range" class="form-control flatpickr-range" placeholder="YYYY-MM-DD to YYYY-MM-DD" value="{{ request('range') }}" readonly>
                                <button class="btn btn-outline-primary waves-effect" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <section id="statistics-card">

                    <!-- Stats Vertical Card -->
                    <div class="row match-height">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="fw-bolder">Sales Invoices</h2>
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag font-medium-5"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bolder">Total Invoices</p>
                                        <p class="card-text">{{ $saleInvoiceCount }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bolder">Amount</p>
                                        <p class="card-text" style="font-size:16px !important"><strong>£{{ number_format($saleInvoiceAmount, 2) }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="fw-bolder">Purchase Invoices</h2>
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck font-medium-5"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bolder">Total Invoices</p>
                                        <p class="card-text">{{ $purchaseInvoiceCount }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bolder">Amount</p>
                                        <p class="card-text " style="font-size:16px !important"><strong>£ {{ number_format($purchaseInvoiceAmount, 2) }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="fw-bolder">Profit/Loss</h2>
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign font-medium-5"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bolder">Purchases</p>
                                        <p class="card-text" style="font-size:16px !important">£ {{ number_format($purchaseInvoiceAmount, 2) }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bolder">Sales</p>
                                        <p class="card-text" style="font-size:16px !important">£ {{ number_format($saleInvoiceAmount, 2) }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bolder">Profit/Loss</p>
                                        <p class="card-text" style="color: {{ ($saleInvoiceAmount - $purchaseInvoiceAmount) < 0 ? 'red' : 'black' }};">
                                            <strong>£ {{ number_format($saleInvoiceAmount - $purchaseInvoiceAmount, 2) }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/ Stats Vertical Card -->
                </section>
            </div>
        </div>
    </div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
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
