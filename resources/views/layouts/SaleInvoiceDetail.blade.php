@extends('layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper p-0">
            <div class="content-header row"></div>
            <div class="content-body">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <!-- Invoice -->
                        <div class="col-xl-9 col-md-8 col-12" id="printInvoice">
                            <div class="card invoice-preview-card" id="invoice-print">
                                <div class="card-body invoice-padding pb-0">
                                    <!-- Header starts -->
                                    <div class="d-flex justify-content-center flex-md-row flex-column invoice-spacing mt-0">
                                        <div>
                                            <div class="logo-wrapper">
                                                <img src="https://ajautosltd.com/app-assets/images/logo/ajautos.png" width="250px">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                        <div class="mt-md-0 mt-2">
                                            <h4 class="invoice-title" style="text-align:left; margin-bottom:1rem;color: black">
                                                Invoice
                                                <span class="invoice-number fw-bolder" style="color: black"># AJ-2025- {{$invoices->id}}</span>
                                            </h4>
                                            <div class="invoice-date-wrapper">
                                                <p class="invoice-date-title"><span class="fw-bolder"  style="color: black">  Date Issued: </span><span class="invoice-date">{{ \Carbon\Carbon::parse($invoices->created_at)->translatedFormat('d F Y') }}</span></p>

                                            </div>

                                        </div>
                                        <div class=" mt-md-0 mt-2" style="text-align:right">
                                            <p class="card-text mb-25"><b>A&amp;J Autos Ltd,</b></p>
                                            <p class="card-text mb-25">19 Kent street,</p>
                                            <p class="card-text mb-25">Le5 3bd, Leicester,</p>
                                            <p class="card-text mb-0">United Kingdom.</p>
                                        </div>
                                    </div>
                                    <!-- Header ends -->
                                </div>

                                <hr class="invoice-spacing">

                                <!-- Address and Contact starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-xl-8 p-0">
                                            <h6 class="mb-2">Invoice To:</h6>
                                            <h6 class="mb-25">{{$invoices->car->customer->name}}</h6>
                                            <p class="card-text mb-25">{{$invoices->car->make}}({{$invoices->car->year_of_manufacture}})</p>
                                            <p class="card-text mb-25">{{$invoices->car->registration_number}}</p>
                                            <p class="card-text mb-25">{{$invoices->car->customer->phone}}</p>
                                            <p class="card-text mb-0"></p>
                                        </div>
                                        <div class="col-xl-4 p-0" style="text-align:right">
                                            <h6 class="mb-2">Enquires:</h6>
                                            <p class="card-text mb-25"><b>Tel # </b>+0116-262-0628</p>
                                            <p class="card-text mb-25">info@ajautosltd.com</p>
                                            <p class="card-text mb-0">www.ajautosltd.com</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address and Contact ends -->

                                <!-- Invoice Description starts -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="py-1">Description</th>
                                            <th class="py-1">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="py-1">

                                                    <p class="card-text">{{ $invoices->detail }}</p>
                                            </td>
                                            <td class="py-1">
                                                <span class="fw-bold">£{{$invoices->amount}}</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="card-body invoice-padding mb-5">
                                    <div class="row invoice-sales-total-wrapper">
                                        <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                            <p class="card-text mb-0">

                                            </p>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                            <div class="invoice-total-wrapper">
                                                <hr class="my-50">
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title fw-bolder" >Total:</p>
                                                    <p class="invoice-total-amount">£{{$invoices->amount}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Description ends -->
                            </div>
                        </div>
                        <!-- /Invoice -->

                        <!-- Invoice Actions -->
                        <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary w-100 mb-75 waves-effect waves-float waves-light" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
                                        Send Invoice
                                    </button>
                                    <a class="btn btn-outline-secondary w-100 mb-75 waves-effect" href="https://ajautosltd.com/salesPrint/9" target="_blank">Print </a>
                                    <button class="btn btn-outline-secondary w-100 mb-75 waves-effect" id="printButton">Download </button>
                                    <a class="btn btn-outline-secondary w-100 mb-75 waves-effect" href="https://ajautosltd.com/sales/9/edit"> Edit </a>

                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Actions -->
                    </div>
                </section>

                <!-- Send Invoice Sidebar -->
                <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Send Invoice</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form action="https://ajautosltd.com/mail" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="R7mU6Y9dMrc2tIEYASt3rM9jG4rh1Ar7XJc3zAGQ">                        <input type="hidden" name="invoice_id" value="9">
                                    <div class="mb-1">
                                        <label for="invoice-from" class="form-label">From</label>
                                        <input type="email" class="form-control" name="from" id="invoice-from" value="noreply@ajautosltd.com" placeholder="company@email.com" readonly="">
                                    </div>
                                    <div class="mb-1">
                                        <label for="invoice-to" class="form-label">To</label>
                                        <input type="email" class="form-control" name="to" id="invoice-to" value="" placeholder="company@email.com">
                                    </div>
                                    <div class="mb-1">
                                        <label for="invoice-subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="invoice-subject" value="Invoice of TOYOTA '{{$invoices->car->registration_number}}'" placeholder="Invoice regarding goods">
                                    </div>
                                    <div class="mb-1">
                                        <label for="invoice-message" class="form-label">Message</label>
                                        <textarea class="form-control" name="body" id="invoice-message" cols="3" rows="11" placeholder="Message...">Dear {{$invoices->car->customer->name}},

Thank you for your business, always a pleasure to work with you!

 </textarea>
                                    </div>

                                    <div class="mb-1">
                                        <label for="invoice-attatchment" class="form-label">Invoice PDF</label>
                                        <input class="form-control" type="file" name="attatchment" id="invoice-attatchment" accept="application/pdf">
                                    </div>
                                    <div class="mb-1 d-flex flex-wrap mt-2">
                                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Send</button>
                                        <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Send Invoice Sidebar -->

                <!-- Add Payment Sidebar -->
                <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Add Payment</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form>
                                    <div class="mb-1">
                                        <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled="">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="amount">Payment Amount</label>
                                        <input id="amount" class="form-control" type="number" placeholder="£1000">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="payment-date">Payment Date</label>
                                        <input id="payment-date" class="form-control date-picker flatpickr-input" type="text" readonly="readonly">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="payment-method">Payment Method</label>
                                        <select class="form-select" id="payment-method">
                                            <option value="" selected="" disabled="">Select payment method</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Bank Transfer">Bank Transfer</option>
                                            <option value="Debit">Debit</option>
                                            <option value="Credit">Credit</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="payment-note">Internal Payment Note</label>
                                        <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
                                    </div>
                                    <div class="d-flex flex-wrap mb-0">
                                        <button type="button" class="btn btn-primary me-1 waves-effect waves-float waves-light" data-bs-dismiss="modal">Send</button>
                                        <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Payment Sidebar -->

            </div>
        </div>
    </div>
@endsection
