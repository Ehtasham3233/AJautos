@extends('layouts.master')

@section('content')

<!-- BEGIN: Content-->
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
            <div class="card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th>Car Number</th>
                            <th>Name</th>
                            <th>Car Make/Model</th>
                            <th>Car Year</th>
                            <th>Car Mileage</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td></td>
                            <td>
                                                                PF02WZB<br />
                                                                SY09DWJ<br />
                                                                MT58UZP<br />
                                
                            </td>
                            <td>Hamza</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                                HONDA<br />
                                                                MINI<br />
                                                            </td>
                            <td>
                                                                2002<br />
                                                                2009<br />
                                                                2009<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                1000<br />
                                                                100<br />
                                                            </td>
                            <td>+44 7939 481021</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/1" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/1"
                                    onclick="event.preventDefault(); document.getElementById('delete-form1').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form1"
                                    action="https://ajautosltd.com/customers/1" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in1">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/1" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-1" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-1" value="Hamza"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-1"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-1" name="phone"
                                                    value="+44 7939 481021" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-1"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-1" name="email"
                                                    value="hamza@gmail.com" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-1"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-1"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-1" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-1-1"
                                                    value="PF02WZB" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-1" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-1-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="1">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-1" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-1-2"
                                                    value="SY09DWJ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-1" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-1-2"
                                                    value="1000" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="149">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-1" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-1-3"
                                                    value="MT58UZP" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-1" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-1-3"
                                                    value="100" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="150">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                MK12YNF<br />
                                                                EO59UEZ<br />
                                
                            </td>
                            <td>CUSTOMER</td>
                            <td>
                                                                NISSAN<br />
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                                2009<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/3" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/3"
                                    onclick="event.preventDefault(); document.getElementById('delete-form3').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form3"
                                    action="https://ajautosltd.com/customers/3" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in3">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel3">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/3" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-3" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-3" value="CUSTOMER"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-3"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-3" name="phone"
                                                    value="07" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-3"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-3" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-3"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-3"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-3" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-3-1"
                                                    value="MK12YNF" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-3" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-3-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="3">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-3" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-3-2"
                                                    value="EO59UEZ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-3" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-3-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="91">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                CK16AXU<br />
                                                                CK17KUP<br />
                                
                            </td>
                            <td>mike</td>
                            <td>
                                                                VAUXHALL<br />
                                                                VAUXHALL<br />
                                                            </td>
                            <td>
                                                                2016<br />
                                                                2017<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07599998852</td>
                            <td>cannal street</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/4" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/4"
                                    onclick="event.preventDefault(); document.getElementById('delete-form4').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form4"
                                    action="https://ajautosltd.com/customers/4" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in4">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel4">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/4" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-4" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-4" value="mike"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-4"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-4" name="phone"
                                                    value="07599998852" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-4"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-4" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-4"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-4"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">cannal street</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-4" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-4-1"
                                                    value="CK16AXU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-4" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-4-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="4">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-4" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-4-2"
                                                    value="CK17KUP" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-4" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-4-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="31">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FN12YTA<br />
                                
                            </td>
                            <td>N A MOTORS</td>
                            <td>
                                                                CITROEN<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07711776999</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/5" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/5"
                                    onclick="event.preventDefault(); document.getElementById('delete-form5').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form5"
                                    action="https://ajautosltd.com/customers/5" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in5">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel5">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/5" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-5" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-5" value="N A MOTORS"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-5"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-5" name="phone"
                                                    value="07711776999" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-5"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-5" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-5"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-5"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-5" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-5-1"
                                                    value="FN12YTA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-5" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-5-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="5">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FN14UWA<br />
                                                                GW04BLN<br />
                                                                MW12KNS<br />
                                                                NK63VSG<br />
                                                                RU11DLL<br />
                                                                AU56VEO<br />
                                                                KN67MWD<br />
                                                                M44NLX<br />
                                                                ET07PWE<br />
                                                                YC09LUD<br />
                                                                NV15TNF<br />
                                                                FP60DWG<br />
                                
                            </td>
                            <td>KIRON MOTORS</td>
                            <td>
                                                                TOYOTA<br />
                                                                LEXUS<br />
                                                                BMW<br />
                                                                BMW<br />
                                                                AUDI<br />
                                                                AUDI<br />
                                                                LAND ROVER<br />
                                                                LAND ROVER<br />
                                                                HYUNDAI<br />
                                                                BMW<br />
                                                                VAUXHALL<br />
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                                2004<br />
                                                                2012<br />
                                                                2013<br />
                                                                2013<br />
                                                                2006<br />
                                                                2017<br />
                                                                2012<br />
                                                                2007<br />
                                                                2009<br />
                                                                2015<br />
                                                                2010<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07540279333</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/6" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/6"
                                    onclick="event.preventDefault(); document.getElementById('delete-form6').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form6"
                                    action="https://ajautosltd.com/customers/6" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in6">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel6">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/6" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-6" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-6" value="KIRON MOTORS"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-6"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-6" name="phone"
                                                    value="07540279333" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-6"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-6" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-6"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-6"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-1"
                                                    value="FN14UWA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="6">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-2"
                                                    value="GW04BLN" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="42">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-3"
                                                    value="MW12KNS" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="43">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-4"
                                                    value="NK63VSG" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-4"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="44">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-5"
                                                    value="RU11DLL" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-5"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="45">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-6"
                                                    value="AU56VEO" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-6"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="46">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-7"
                                                    value="KN67MWD" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-7"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="63">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-8"
                                                    value="M44NLX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-8"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="104">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-9"
                                                    value="ET07PWE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-9"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="105">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-10"
                                                    value="YC09LUD" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-10"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="108">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-11"
                                                    value="NV15TNF" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-11"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="114">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-6" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-6-12"
                                                    value="FP60DWG" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-6" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-6-12"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="115">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                EF60UAV<br />
                                
                            </td>
                            <td>NAEEM MALIK</td>
                            <td>
                                                                HYUNDAI<br />
                                                            </td>
                            <td>
                                                                2010<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07380263996</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/7" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in7">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/7"
                                    onclick="event.preventDefault(); document.getElementById('delete-form7').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form7"
                                    action="https://ajautosltd.com/customers/7" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in7">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel7">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/7" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-7" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-7" value="NAEEM MALIK"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-7"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-7" name="phone"
                                                    value="07380263996" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-7"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-7" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-7"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-7"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-7" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-7-1"
                                                    value="EF60UAV" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-7" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-7-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="7">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                DV59GMF<br />
                                                                EA17PKX<br />
                                
                            </td>
                            <td>CITY MOTOR</td>
                            <td>
                                                                VAUXHALL<br />
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2009<br />
                                                                2017<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                112491<br />
                                                            </td>
                            <td>07711178638</td>
                            <td>16-18 Trafford road, LE5 4BJ Leicester</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/8" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/8"
                                    onclick="event.preventDefault(); document.getElementById('delete-form8').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form8"
                                    action="https://ajautosltd.com/customers/8" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in8">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel8">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/8" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-8" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-8" value="CITY MOTOR"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-8"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-8" name="phone"
                                                    value="07711178638" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-8"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-8" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-8"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-8"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">16-18 Trafford road, LE5 4BJ Leicester</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-8" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-8-1"
                                                    value="DV59GMF" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-8" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-8-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="8">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-8" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-8-2"
                                                    value="EA17PKX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-8" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-8-2"
                                                    value="112491" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="127">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                KV14MYY<br />
                                
                            </td>
                            <td>FURQAN</td>
                            <td>
                                                                MERCEDES-BENZ<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07735363151</td>
                            <td>LEICESTER</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/9" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in9">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/9"
                                    onclick="event.preventDefault(); document.getElementById('delete-form9').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form9"
                                    action="https://ajautosltd.com/customers/9" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in9">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel9">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/9" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-9" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-9" value="FURQAN"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-9"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-9" name="phone"
                                                    value="07735363151" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-9"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-9" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-9"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-9"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">LEICESTER</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-9" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-9-1"
                                                    value="KV14MYY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-9" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-9-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="9">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                M3SVU<br />
                                                                WP16FPT<br />
                                                                GB11CCE<br />
                                                                S100UNL<br />
                                
                            </td>
                            <td>ATUL</td>
                            <td>
                                                                LAND ROVER<br />
                                                                BMW<br />
                                                                MG<br />
                                                                BMW<br />
                                                            </td>
                            <td>
                                                                2005<br />
                                                                2016<br />
                                                                2019<br />
                                                                2019<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>0773537137</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/10" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/10"
                                    onclick="event.preventDefault(); document.getElementById('delete-form10').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form10"
                                    action="https://ajautosltd.com/customers/10" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in10">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel10">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/10" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-10" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-10" value="ATUL"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-10"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-10" name="phone"
                                                    value="0773537137" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-10"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-10" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-10"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-10"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-10" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-10-1"
                                                    value="M3SVU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-10" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-10-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="10">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-10" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-10-2"
                                                    value="WP16FPT" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-10" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-10-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="53">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-10" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-10-3"
                                                    value="GB11CCE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-10" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-10-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="55">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-10" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-10-4"
                                                    value="S100UNL" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-10" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-10-4"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="56">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                NL15NPA<br />
                                
                            </td>
                            <td>JHON</td>
                            <td>
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07752579423</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/11" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in11">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/11"
                                    onclick="event.preventDefault(); document.getElementById('delete-form11').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form11"
                                    action="https://ajautosltd.com/customers/11" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in11">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel11">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/11" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-11" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-11" value="JHON"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-11"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-11" name="phone"
                                                    value="07752579423" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-11"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-11" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-11"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-11"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-11" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-11-1"
                                                    value="NL15NPA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-11" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-11-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="11">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                ET06BOV<br />
                                
                            </td>
                            <td>DIMITRI</td>
                            <td>
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2006<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>01162620628</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/12" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in12">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/12"
                                    onclick="event.preventDefault(); document.getElementById('delete-form12').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form12"
                                    action="https://ajautosltd.com/customers/12" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in12">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel12">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/12" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-12" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-12" value="DIMITRI"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-12"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-12" name="phone"
                                                    value="01162620628" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-12"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-12" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-12"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-12"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-12" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-12-1"
                                                    value="ET06BOV" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-12" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-12-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="12">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FH14CFX<br />
                                                                FP11HFY<br />
                                
                            </td>
                            <td>mayfair motors</td>
                            <td>
                                                                VAUXHALL<br />
                                                                VAUXHALL<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07963502233</td>
                            <td>50 Bradgate St, Leicester LE4 0BQ</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/13" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in13">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/13"
                                    onclick="event.preventDefault(); document.getElementById('delete-form13').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form13"
                                    action="https://ajautosltd.com/customers/13" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in13">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel13">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/13" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-13" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-13" value="mayfair motors"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-13"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-13" name="phone"
                                                    value="07963502233" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-13"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-13" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-13"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-13"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">50 Bradgate St, Leicester LE4 0BQ</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-13" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-13-1"
                                                    value="FH14CFX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-13" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-13-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="13">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-13" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-13-2"
                                                    value="FP11HFY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-13" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-13-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="14">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                K1NWM<br />
                                                                YY16HTA<br />
                                                                HK56GZY<br />
                                
                            </td>
                            <td>ZAHID</td>
                            <td>
                                                                MERCEDES<br />
                                                                VOLVO<br />
                                                                BMW<br />
                                                            </td>
                            <td>
                                                                2006<br />
                                                                2016<br />
                                                                2006<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07867798303</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/15" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in15">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/15"
                                    onclick="event.preventDefault(); document.getElementById('delete-form15').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form15"
                                    action="https://ajautosltd.com/customers/15" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in15">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel15">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/15" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-15" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-15" value="ZAHID"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-15"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-15" name="phone"
                                                    value="07867798303" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-15"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-15" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-15"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-15"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-15" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-15-1"
                                                    value="K1NWM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-15" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-15-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="16">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-15" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-15-2"
                                                    value="YY16HTA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-15" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-15-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="25">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-15" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-15-3"
                                                    value="HK56GZY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-15" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-15-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="41">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                PF02WZV<br />
                                
                            </td>
                            <td>John</td>
                            <td>
                                                                HONDA<br />
                                                            </td>
                            <td>
                                                                2002<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>03125235632</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/18" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in18">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/18"
                                    onclick="event.preventDefault(); document.getElementById('delete-form18').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form18"
                                    action="https://ajautosltd.com/customers/18" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in18">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel18">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/18" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-18" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-18" value="John"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-18"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-18" name="phone"
                                                    value="03125235632" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-18"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-18" name="email"
                                                    value="dame@gmail.com" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-18"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-18"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-18" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-18-1"
                                                    value="PF02WZV" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-18" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-18-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="18">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                WG57DJV<br />
                                
                            </td>
                            <td>waseem</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2008<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07719004119</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/19" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in19">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/19"
                                    onclick="event.preventDefault(); document.getElementById('delete-form19').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form19"
                                    action="https://ajautosltd.com/customers/19" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in19">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel19">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/19" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-19" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-19" value="waseem"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-19"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-19" name="phone"
                                                    value="07719004119" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-19"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-19" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-19"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-19"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-19" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-19-1"
                                                    value="WG57DJV" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-19" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-19-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="19">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                BF58FLP<br />
                                
                            </td>
                            <td>AFTAB</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2008<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07809668698</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/20" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/20"
                                    onclick="event.preventDefault(); document.getElementById('delete-form20').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form20"
                                    action="https://ajautosltd.com/customers/20" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in20">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel20">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/20" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-20" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-20" value="AFTAB"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-20"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-20" name="phone"
                                                    value="07809668698" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-20"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-20" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-20"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-20"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-20" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-20-1"
                                                    value="BF58FLP" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-20" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-20-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="20">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YB62SRU<br />
                                
                            </td>
                            <td>imad</td>
                            <td>
                                                                HYUNDAI<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07866173031</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/24" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in24">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/24"
                                    onclick="event.preventDefault(); document.getElementById('delete-form24').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form24"
                                    action="https://ajautosltd.com/customers/24" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in24">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel24">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/24" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-24" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-24" value="imad"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-24"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-24" name="phone"
                                                    value="07866173031" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-24"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-24" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-24"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-24"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-24" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-24-1"
                                                    value="YB62SRU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-24" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-24-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="23">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                EK67XBG<br />
                                
                            </td>
                            <td>saab</td>
                            <td>
                                                                NISSAN<br />
                                                            </td>
                            <td>
                                                                2017<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07759500896</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/25" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/25"
                                    onclick="event.preventDefault(); document.getElementById('delete-form25').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form25"
                                    action="https://ajautosltd.com/customers/25" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in25">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel25">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/25" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-25" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-25" value="saab"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-25"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-25" name="phone"
                                                    value="07759500896" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-25"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-25" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-25"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-25"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-25" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-25-1"
                                                    value="EK67XBG" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-25" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-25-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="24">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                KH05ALD<br />
                                                                GH16JHE<br />
                                                                D12KAC<br />
                                
                            </td>
                            <td>A &amp; G</td>
                            <td>
                                                                LAND ROVER<br />
                                                                BMW<br />
                                                                FERRARI<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                                2016<br />
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07765252255</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/26" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in26">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/26"
                                    onclick="event.preventDefault(); document.getElementById('delete-form26').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form26"
                                    action="https://ajautosltd.com/customers/26" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in26">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel26">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/26" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-26" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-26" value="A &amp; G"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-26"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-26" name="phone"
                                                    value="07765252255" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-26"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-26" name="email"
                                                    value="khalidanwar.choudhry@gmail.com" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-26"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-26"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-26" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-26-1"
                                                    value="KH05ALD" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-26" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-26-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="26">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-26" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-26-2"
                                                    value="GH16JHE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-26" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-26-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="71">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-26" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-26-3"
                                                    value="D12KAC" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-26" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-26-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="72">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                MD06NYC<br />
                                
                            </td>
                            <td>gulraiz</td>
                            <td>
                                                                MERCEDES<br />
                                                            </td>
                            <td>
                                                                2006<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07764369404</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/27" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in27">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/27"
                                    onclick="event.preventDefault(); document.getElementById('delete-form27').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form27"
                                    action="https://ajautosltd.com/customers/27" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in27">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel27">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/27" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-27" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-27" value="gulraiz"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-27"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-27" name="phone"
                                                    value="07764369404" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-27"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-27" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-27"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-27"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-27" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-27-1"
                                                    value="MD06NYC" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-27" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-27-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="27">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                HJ63XHT<br />
                                
                            </td>
                            <td>abdul</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07598169973</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/28" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in28">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/28"
                                    onclick="event.preventDefault(); document.getElementById('delete-form28').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form28"
                                    action="https://ajautosltd.com/customers/28" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in28">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel28">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/28" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-28" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-28" value="abdul"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-28"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-28" name="phone"
                                                    value="07598169973" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-28"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-28" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-28"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-28"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-28" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-28-1"
                                                    value="HJ63XHT" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-28" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-28-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="28">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FE12EPY<br />
                                                                FC03NVK<br />
                                
                            </td>
                            <td>qureshi</td>
                            <td>
                                                                TOYOTA<br />
                                                                HONDA<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                                2003<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07753815244</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/29" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in29">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/29"
                                    onclick="event.preventDefault(); document.getElementById('delete-form29').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form29"
                                    action="https://ajautosltd.com/customers/29" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in29">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel29">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/29" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-29" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-29" value="qureshi"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-29"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-29" name="phone"
                                                    value="07753815244" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-29"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-29" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-29"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-29"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-29" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-29-1"
                                                    value="FE12EPY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-29" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-29-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="29">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-29" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-29-2"
                                                    value="FC03NVK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-29" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-29-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="40">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FL15PGU<br />
                                                                GA14MAD<br />
                                
                            </td>
                            <td>ahmed</td>
                            <td>
                                                                TOYOTA<br />
                                                                MERCEDES-BENZ<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                                2018<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07472000960</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/30" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/30"
                                    onclick="event.preventDefault(); document.getElementById('delete-form30').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form30"
                                    action="https://ajautosltd.com/customers/30" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in30">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel30">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/30" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-30" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-30" value="ahmed"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-30"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-30" name="phone"
                                                    value="07472000960" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-30"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-30" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-30"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-30"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-30" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-30-1"
                                                    value="FL15PGU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-30" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-30-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="30">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-30" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-30-2"
                                                    value="GA14MAD" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-30" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-30-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="95">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                WV11NXF<br />
                                
                            </td>
                            <td>PERDESI</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07908005770</td>
                            <td>LEICESTER</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/31" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in31">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/31"
                                    onclick="event.preventDefault(); document.getElementById('delete-form31').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form31"
                                    action="https://ajautosltd.com/customers/31" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in31">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel31">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/31" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-31" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-31" value="PERDESI"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-31"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-31" name="phone"
                                                    value="07908005770" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-31"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-31" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-31"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-31"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">LEICESTER</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-31" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-31-1"
                                                    value="WV11NXF" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-31" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-31-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="33">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                MY13RHM<br />
                                                                AA19AAA<br />
                                                                FT60HLW<br />
                                
                            </td>
                            <td>sunny</td>
                            <td>
                                                                MERCEDES-BENZ<br />
                                                                MERCEDES-BENZ<br />
                                                                BMW<br />
                                                            </td>
                            <td>
                                                                2016<br />
                                                                2019<br />
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07494456328</td>
                            <td>leicester</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/32" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in32">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/32"
                                    onclick="event.preventDefault(); document.getElementById('delete-form32').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form32"
                                    action="https://ajautosltd.com/customers/32" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in32">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel32">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/32" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-32" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-32" value="sunny"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-32"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-32" name="phone"
                                                    value="07494456328" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-32"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-32" name="email"
                                                    value="harisleic@yahoo.co.uk" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-32"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-32"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">leicester</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-32" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-32-1"
                                                    value="MY13RHM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-32" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-32-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="34">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-32" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-32-2"
                                                    value="AA19AAA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-32" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-32-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="39">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-32" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-32-3"
                                                    value="FT60HLW" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-32" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-32-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="83">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                BN59VGP<br />
                                
                            </td>
                            <td>anis</td>
                            <td>
                                                                CITROEN<br />
                                                            </td>
                            <td>
                                                                2009<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07988984105</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/33" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in33">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/33"
                                    onclick="event.preventDefault(); document.getElementById('delete-form33').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form33"
                                    action="https://ajautosltd.com/customers/33" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in33">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel33">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/33" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-33" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-33" value="anis"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-33"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-33" name="phone"
                                                    value="07988984105" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-33"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-33" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-33"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-33"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-33" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-33-1"
                                                    value="BN59VGP" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-33" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-33-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="35">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                EO58FDK<br />
                                
                            </td>
                            <td>ILYAS</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2008<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07380849393</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/34" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in34">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/34"
                                    onclick="event.preventDefault(); document.getElementById('delete-form34').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form34"
                                    action="https://ajautosltd.com/customers/34" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in34">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel34">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/34" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-34" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-34" value="ILYAS"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-34"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-34" name="phone"
                                                    value="07380849393" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-34"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-34" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-34"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-34"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-34" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-34-1"
                                                    value="EO58FDK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-34" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-34-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="36">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YF09BYD<br />
                                
                            </td>
                            <td>CHRIS</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2009<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07388547638</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/35" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in35">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/35"
                                    onclick="event.preventDefault(); document.getElementById('delete-form35').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form35"
                                    action="https://ajautosltd.com/customers/35" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in35">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel35">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/35" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-35" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-35" value="CHRIS"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-35"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-35" name="phone"
                                                    value="07388547638" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-35"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-35" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-35"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-35"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-35" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-35-1"
                                                    value="YF09BYD" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-35" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-35-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="37">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                PK10XSZ<br />
                                
                            </td>
                            <td>MOLANA AYANLE</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2010<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07572693060</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/36" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in36">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/36"
                                    onclick="event.preventDefault(); document.getElementById('delete-form36').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form36"
                                    action="https://ajautosltd.com/customers/36" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in36">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel36">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/36" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-36" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-36" value="MOLANA AYANLE"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-36"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-36" name="phone"
                                                    value="07572693060" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-36"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-36" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-36"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-36"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-36" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-36-1"
                                                    value="PK10XSZ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-36" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-36-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="38">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                NK13UZE<br />
                                
                            </td>
                            <td>sajid khan</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07786658764</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/37" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in37">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/37"
                                    onclick="event.preventDefault(); document.getElementById('delete-form37').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form37"
                                    action="https://ajautosltd.com/customers/37" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in37">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel37">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/37" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-37" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-37" value="sajid khan"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-37"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-37" name="phone"
                                                    value="07786658764" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-37"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-37" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-37"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-37"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-37" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-37-1"
                                                    value="NK13UZE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-37" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-37-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="47">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                EF66FSX<br />
                                                                WN66WOY<br />
                                                                HJ66HDN<br />
                                                                HF66NUY<br />
                                                                WD18XLP<br />
                                
                            </td>
                            <td>PRONTO BITE</td>
                            <td>
                                                                FORD<br />
                                                                FORD<br />
                                                                FORD<br />
                                                                FORD<br />
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2016<br />
                                                                2016<br />
                                                                2016<br />
                                                                2016<br />
                                                                2018<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                251173<br />
                                                                125<br />
                                                                106550<br />
                                                            </td>
                            <td>07366340982</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/38" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in38">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/38"
                                    onclick="event.preventDefault(); document.getElementById('delete-form38').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form38"
                                    action="https://ajautosltd.com/customers/38" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in38">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel38">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/38" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-38" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-38" value="PRONTO BITE"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-38"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-38" name="phone"
                                                    value="07366340982" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-38"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-38" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-38"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-38"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-38" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-38-1"
                                                    value="EF66FSX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-38" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-38-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="48">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-38" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-38-2"
                                                    value="WN66WOY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-38" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-38-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="49">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-38" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-38-3"
                                                    value="HJ66HDN" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-38" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-38-3"
                                                    value="251173" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="134">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-38" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-38-4"
                                                    value="HF66NUY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-38" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-38-4"
                                                    value="125" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="137">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-38" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-38-5"
                                                    value="WD18XLP" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-38" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-38-5"
                                                    value="106550" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="147">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                GX14ZHE<br />
                                
                            </td>
                            <td>SADIK</td>
                            <td>
                                                                CITROEN<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07972147252</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/39" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in39">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/39"
                                    onclick="event.preventDefault(); document.getElementById('delete-form39').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form39"
                                    action="https://ajautosltd.com/customers/39" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in39">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel39">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/39" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-39" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-39" value="SADIK"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-39"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-39" name="phone"
                                                    value="07972147252" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-39"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-39" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-39"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-39"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-39" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-39-1"
                                                    value="GX14ZHE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-39" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-39-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="50">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                MA12AHX<br />
                                
                            </td>
                            <td>MAX</td>
                            <td>
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07772001010</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/40" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in40">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/40"
                                    onclick="event.preventDefault(); document.getElementById('delete-form40').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form40"
                                    action="https://ajautosltd.com/customers/40" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in40">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel40">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/40" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-40" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-40" value="MAX"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-40"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-40" name="phone"
                                                    value="07772001010" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-40"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-40" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-40"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-40"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-40" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-40-1"
                                                    value="MA12AHX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-40" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-40-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="51">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                WU05EGY<br />
                                
                            </td>
                            <td>RAWINDER</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2005<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07399990286</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/41" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in41">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/41"
                                    onclick="event.preventDefault(); document.getElementById('delete-form41').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form41"
                                    action="https://ajautosltd.com/customers/41" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in41">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel41">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/41" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-41" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-41" value="RAWINDER"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-41"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-41" name="phone"
                                                    value="07399990286" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-41"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-41" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-41"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-41"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-41" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-41-1"
                                                    value="WU05EGY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-41" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-41-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="52">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                AP09CNJ<br />
                                
                            </td>
                            <td>FAISAL MALIK</td>
                            <td>
                                                                SUZUKI<br />
                                                            </td>
                            <td>
                                                                2009<br />
                                                            </td>
                            <td>
                                                                120Km<br />
                                                            </td>
                            <td>07540005571</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/42" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in42">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/42"
                                    onclick="event.preventDefault(); document.getElementById('delete-form42').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form42"
                                    action="https://ajautosltd.com/customers/42" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in42">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel42">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/42" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-42" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-42" value="FAISAL MALIK"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-42"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-42" name="phone"
                                                    value="07540005571" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-42"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-42" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-42"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-42"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-42" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-42-1"
                                                    value="AP09CNJ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-42" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-42-1"
                                                    value="120Km" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="54">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YR60JXM<br />
                                
                            </td>
                            <td>ARIF RAFIKI PARTS</td>
                            <td>
                                                                BMW<br />
                                                            </td>
                            <td>
                                                                2010<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07904410000</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/43" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in43">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/43"
                                    onclick="event.preventDefault(); document.getElementById('delete-form43').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form43"
                                    action="https://ajautosltd.com/customers/43" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in43">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel43">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/43" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-43" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-43" value="ARIF RAFIKI PARTS"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-43"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-43" name="phone"
                                                    value="07904410000" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-43"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-43" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-43"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-43"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-43" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-43-1"
                                                    value="YR60JXM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-43" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-43-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="57">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YR62UDL<br />
                                
                            </td>
                            <td>IRFAN SHEIKH</td>
                            <td>
                                                                MINI<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07868925235</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/44" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in44">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/44"
                                    onclick="event.preventDefault(); document.getElementById('delete-form44').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form44"
                                    action="https://ajautosltd.com/customers/44" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in44">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel44">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/44" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-44" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-44" value="IRFAN SHEIKH"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-44"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-44" name="phone"
                                                    value="07868925235" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-44"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-44" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-44"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-44"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-44" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-44-1"
                                                    value="YR62UDL" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-44" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-44-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="58">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                BT12XWR<br />
                                
                            </td>
                            <td>JUNAID GUJAR</td>
                            <td>
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07963788303</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/45" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in45">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/45"
                                    onclick="event.preventDefault(); document.getElementById('delete-form45').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form45"
                                    action="https://ajautosltd.com/customers/45" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in45">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel45">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/45" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-45" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-45" value="JUNAID GUJAR"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-45"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-45" name="phone"
                                                    value="07963788303" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-45"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-45" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-45"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-45"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-45" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-45-1"
                                                    value="BT12XWR" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-45" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-45-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="59">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                VA14HTC<br />
                                
                            </td>
                            <td>GARDEEP</td>
                            <td>
                                                                NISSAN<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07462008846</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/46" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in46">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/46"
                                    onclick="event.preventDefault(); document.getElementById('delete-form46').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form46"
                                    action="https://ajautosltd.com/customers/46" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in46">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel46">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/46" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-46" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-46" value="GARDEEP"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-46"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-46" name="phone"
                                                    value="07462008846" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-46"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-46" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-46"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-46"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-46" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-46-1"
                                                    value="VA14HTC" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-46" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-46-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="60">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                RO57YSS<br />
                                
                            </td>
                            <td>MUSSA</td>
                            <td>
                                                                BMW<br />
                                                            </td>
                            <td>
                                                                2007<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07850073388</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/47" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in47">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/47"
                                    onclick="event.preventDefault(); document.getElementById('delete-form47').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form47"
                                    action="https://ajautosltd.com/customers/47" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in47">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel47">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/47" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-47" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-47" value="MUSSA"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-47"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-47" name="phone"
                                                    value="07850073388" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-47"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-47" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-47"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-47"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-47" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-47-1"
                                                    value="RO57YSS" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-47" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-47-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="61">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                S8NTK<br />
                                
                            </td>
                            <td>RAX</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07967560312</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/48" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in48">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/48"
                                    onclick="event.preventDefault(); document.getElementById('delete-form48').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form48"
                                    action="https://ajautosltd.com/customers/48" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in48">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel48">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/48" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-48" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-48" value="RAX"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-48"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-48" name="phone"
                                                    value="07967560312" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-48"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-48" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-48"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-48"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-48" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-48-1"
                                                    value="S8NTK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-48" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-48-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="62">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                BN59FWT<br />
                                
                            </td>
                            <td>KHALID</td>
                            <td>
                                                                NISSAN<br />
                                                            </td>
                            <td>
                                                                2009<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07737681399</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/49" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in49">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/49"
                                    onclick="event.preventDefault(); document.getElementById('delete-form49').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form49"
                                    action="https://ajautosltd.com/customers/49" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in49">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel49">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/49" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-49" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-49" value="KHALID"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-49"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-49" name="phone"
                                                    value="07737681399" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-49"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-49" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-49"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-49"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-49" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-49-1"
                                                    value="BN59FWT" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-49" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-49-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="64">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                KT60ODE<br />
                                                                YA52YVE<br />
                                                                M30ODG<br />
                                                                H20LLG<br />
                                                                YS56UZO<br />
                                                                P454POT<br />
                                                                GF55UNS<br />
                                
                            </td>
                            <td>GEORGE</td>
                            <td>
                                                                VOLVO<br />
                                                                HONDA<br />
                                                                BMW<br />
                                                                BMW<br />
                                                                HONDA<br />
                                                                MAZDA<br />
                                                                MAZDA<br />
                                                            </td>
                            <td>
                                                                2010<br />
                                                                2003<br />
                                                                2005<br />
                                                                2008<br />
                                                                2007<br />
                                                                1997<br />
                                                                2005<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07542645757</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/50" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/50"
                                    onclick="event.preventDefault(); document.getElementById('delete-form50').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form50"
                                    action="https://ajautosltd.com/customers/50" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in50">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel50">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/50" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-50" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-50" value="GEORGE"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-50"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-50" name="phone"
                                                    value="07542645757" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-50"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-50" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-50"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-50"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-50" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-50-1"
                                                    value="KT60ODE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-50" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-50-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="65">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-50" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-50-2"
                                                    value="YA52YVE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-50" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-50-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="66">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-50" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-50-3"
                                                    value="M30ODG" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-50" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-50-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="67">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-50" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-50-4"
                                                    value="H20LLG" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-50" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-50-4"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="68">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-50" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-50-5"
                                                    value="YS56UZO" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-50" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-50-5"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="69">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-50" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-50-6"
                                                    value="P454POT" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-50" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-50-6"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="70">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-50" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-50-7"
                                                    value="GF55UNS" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-50" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-50-7"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="110">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FG04GXN<br />
                                
                            </td>
                            <td>RAHEEM</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2004<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07974269425</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/51" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in51">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/51"
                                    onclick="event.preventDefault(); document.getElementById('delete-form51').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form51"
                                    action="https://ajautosltd.com/customers/51" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in51">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel51">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/51" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-51" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-51" value="RAHEEM"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-51"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-51" name="phone"
                                                    value="07974269425" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-51"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-51" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-51"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-51"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-51" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-51-1"
                                                    value="FG04GXN" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-51" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-51-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="73">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                Y77ESA<br />
                                                                Y77SUM<br />
                                                                RR56ART<br />
                                                                NG61XSC<br />
                                
                            </td>
                            <td>FAREED</td>
                            <td>
                                                                BMW<br />
                                                                NISSAN<br />
                                                                SKODA<br />
                                                                NISSAN<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                                2012<br />
                                                                2008<br />
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07779155000</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/52" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in52">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/52"
                                    onclick="event.preventDefault(); document.getElementById('delete-form52').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form52"
                                    action="https://ajautosltd.com/customers/52" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in52">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel52">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/52" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-52" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-52" value="FAREED"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-52"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-52" name="phone"
                                                    value="07779155000" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-52"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-52" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-52"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-52"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-52" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-52-1"
                                                    value="Y77ESA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-52" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-52-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="74">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-52" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-52-2"
                                                    value="Y77SUM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-52" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-52-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="75">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-52" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-52-3"
                                                    value="RR56ART" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-52" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-52-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="76">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-52" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-52-4"
                                                    value="NG61XSC" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-52" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-52-4"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="77">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                VE62SVF<br />
                                                                ASR231T<br />
                                
                            </td>
                            <td>FAISAL SHAKOOR</td>
                            <td>
                                                                SEAT<br />
                                                                LAND ROVER<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                                2014<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07916677021</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/53" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in53">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/53"
                                    onclick="event.preventDefault(); document.getElementById('delete-form53').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form53"
                                    action="https://ajautosltd.com/customers/53" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in53">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel53">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/53" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-53" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-53" value="FAISAL SHAKOOR"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-53"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-53" name="phone"
                                                    value="07916677021" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-53"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-53" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-53"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-53"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-53" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-53-1"
                                                    value="VE62SVF" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-53" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-53-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="78">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-53" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-53-2"
                                                    value="ASR231T" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-53" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-53-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="79">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                BF16YFM<br />
                                                                N44RRU<br />
                                
                            </td>
                            <td>naveed</td>
                            <td>
                                                                PEUGEOT<br />
                                                                AUDI<br />
                                                            </td>
                            <td>
                                                                2016<br />
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07753842302</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/54" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in54">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/54"
                                    onclick="event.preventDefault(); document.getElementById('delete-form54').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form54"
                                    action="https://ajautosltd.com/customers/54" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in54">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel54">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/54" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-54" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-54" value="naveed"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-54"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-54" name="phone"
                                                    value="07753842302" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-54"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-54" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-54"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-54"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-54" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-54-1"
                                                    value="BF16YFM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-54" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-54-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="80">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-54" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-54-2"
                                                    value="N44RRU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-54" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-54-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="81">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                SA13DXV<br />
                                
                            </td>
                            <td>NOUMAN</td>
                            <td>
                                                                PEUGEOT<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07935466318</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/55" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in55">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/55"
                                    onclick="event.preventDefault(); document.getElementById('delete-form55').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form55"
                                    action="https://ajautosltd.com/customers/55" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in55">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel55">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/55" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-55" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-55" value="NOUMAN"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-55"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-55" name="phone"
                                                    value="07935466318" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-55"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-55" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-55"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-55"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-55" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-55-1"
                                                    value="SA13DXV" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-55" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-55-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="82">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                SB08PWX<br />
                                
                            </td>
                            <td>TALHA</td>
                            <td>
                                                                VAUXHALL<br />
                                                            </td>
                            <td>
                                                                2008<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07762896129</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/56" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in56">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/56"
                                    onclick="event.preventDefault(); document.getElementById('delete-form56').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form56"
                                    action="https://ajautosltd.com/customers/56" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in56">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel56">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/56" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-56" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-56" value="TALHA"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-56"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-56" name="phone"
                                                    value="07762896129" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-56"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-56" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-56"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-56"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-56" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-56-1"
                                                    value="SB08PWX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-56" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-56-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="84">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                SC56XRJ<br />
                                                                BL04KAA<br />
                                                                SD52KFG<br />
                                
                            </td>
                            <td>Car Select Leicester Ltd</td>
                            <td>
                                                                CITROEN<br />
                                                                MERCEDES<br />
                                                                FIAT<br />
                                                            </td>
                            <td>
                                                                2007<br />
                                                                2004<br />
                                                                2002<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                62033<br />
                                                            </td>
                            <td>07821729162</td>
                            <td>297 Melton Road Le4 7an Leicester</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/57" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in57">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/57"
                                    onclick="event.preventDefault(); document.getElementById('delete-form57').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form57"
                                    action="https://ajautosltd.com/customers/57" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in57">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel57">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/57" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-57" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-57" value="Car Select Leicester Ltd"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-57"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-57" name="phone"
                                                    value="07821729162" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-57"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-57" name="email"
                                                    value="carpalaceuk@gmail.com" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-57"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-57"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">297 Melton Road Le4 7an Leicester</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-57" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-57-1"
                                                    value="SC56XRJ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-57" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-57-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="85">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-57" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-57-2"
                                                    value="BL04KAA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-57" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-57-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="86">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-57" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-57-3"
                                                    value="SD52KFG" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-57" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-57-3"
                                                    value="62033" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="136">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                SP14HLW<br />
                                                                FH03YFX<br />
                                
                            </td>
                            <td>TOUSEEF</td>
                            <td>
                                                                PEUGEOT<br />
                                                                FIAT<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                                2003<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07403289289</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/58" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in58">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/58"
                                    onclick="event.preventDefault(); document.getElementById('delete-form58').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form58"
                                    action="https://ajautosltd.com/customers/58" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in58">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel58">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/58" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-58" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-58" value="TOUSEEF"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-58"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-58" name="phone"
                                                    value="07403289289" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-58"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-58" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-58"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-58"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-58" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-58-1"
                                                    value="SP14HLW" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-58" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-58-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="87">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-58" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-58-2"
                                                    value="FH03YFX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-58" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-58-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="106">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FE14GAO<br />
                                
                            </td>
                            <td>Amerjeet</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07404577669</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/59" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in59">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/59"
                                    onclick="event.preventDefault(); document.getElementById('delete-form59').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form59"
                                    action="https://ajautosltd.com/customers/59" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in59">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel59">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/59" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-59" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-59" value="Amerjeet"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-59"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-59" name="phone"
                                                    value="07404577669" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-59"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-59" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-59"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-59"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-59" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-59-1"
                                                    value="FE14GAO" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-59" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-59-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="88">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FE68ZGT<br />
                                
                            </td>
                            <td>HOLLY</td>
                            <td>
                                                                KIA<br />
                                                            </td>
                            <td>
                                                                2018<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07714798030</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/60" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in60">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/60"
                                    onclick="event.preventDefault(); document.getElementById('delete-form60').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form60"
                                    action="https://ajautosltd.com/customers/60" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in60">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel60">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/60" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-60" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-60" value="HOLLY"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-60"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-60" name="phone"
                                                    value="07714798030" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-60"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-60" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-60"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-60"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-60" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-60-1"
                                                    value="FE68ZGT" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-60" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-60-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="89">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                HT07CKU<br />
                                
                            </td>
                            <td>khurrum shakoor</td>
                            <td>
                                                                MERCEDES<br />
                                                            </td>
                            <td>
                                                                2007<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07999240718</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/61" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in61">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/61"
                                    onclick="event.preventDefault(); document.getElementById('delete-form61').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form61"
                                    action="https://ajautosltd.com/customers/61" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in61">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel61">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/61" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-61" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-61" value="khurrum shakoor"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-61"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-61" name="phone"
                                                    value="07999240718" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-61"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-61" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-61"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-61"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-61" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-61-1"
                                                    value="HT07CKU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-61" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-61-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="90">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                H894RAX<br />
                                
                            </td>
                            <td>test</td>
                            <td>
                                                                ROVER<br />
                                                            </td>
                            <td>
                                                                1991<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>03125256322</td>
                            <td>Test User to check car reg</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/62" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in62">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/62"
                                    onclick="event.preventDefault(); document.getElementById('delete-form62').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form62"
                                    action="https://ajautosltd.com/customers/62" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in62">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel62">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/62" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-62" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-62" value="test"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-62"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-62" name="phone"
                                                    value="03125256322" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-62"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-62" name="email"
                                                    value="test@hotmail.com" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-62"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-62"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">Test User to check car reg</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-62" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-62-1"
                                                    value="H894RAX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-62" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-62-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="92">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                N124FLK<br />
                                
                            </td>
                            <td>isti</td>
                            <td>
                                                                MERCEDES<br />
                                                            </td>
                            <td>
                                                                1995<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07795002885</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/63" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in63">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/63"
                                    onclick="event.preventDefault(); document.getElementById('delete-form63').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form63"
                                    action="https://ajautosltd.com/customers/63" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in63">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel63">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/63" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-63" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-63" value="isti"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-63"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-63" name="phone"
                                                    value="07795002885" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-63"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-63" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-63"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-63"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-63" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-63-1"
                                                    value="N124FLK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-63" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-63-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="93">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                WJ06DZC<br />
                                
                            </td>
                            <td>FAIZAN</td>
                            <td>
                                                                VAUXHALL<br />
                                                            </td>
                            <td>
                                                                2006<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07424983109</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/64" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in64">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/64"
                                    onclick="event.preventDefault(); document.getElementById('delete-form64').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form64"
                                    action="https://ajautosltd.com/customers/64" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in64">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel64">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/64" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-64" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-64" value="FAIZAN"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-64"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-64" name="phone"
                                                    value="07424983109" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-64"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-64" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-64"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-64"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-64" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-64-1"
                                                    value="WJ06DZC" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-64" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-64-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="94">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FM56YSX<br />
                                
                            </td>
                            <td>OLUKAYODE</td>
                            <td>
                                                                NISSAN<br />
                                                            </td>
                            <td>
                                                                2007<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07861237944</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/65" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in65">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/65"
                                    onclick="event.preventDefault(); document.getElementById('delete-form65').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form65"
                                    action="https://ajautosltd.com/customers/65" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in65">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel65">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/65" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-65" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-65" value="OLUKAYODE"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-65"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-65" name="phone"
                                                    value="07861237944" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-65"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-65" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-65"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-65"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-65" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-65-1"
                                                    value="FM56YSX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-65" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-65-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="96">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                WL13AXM<br />
                                
                            </td>
                            <td>samer ahmed</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07424313930</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/66" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in66">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/66"
                                    onclick="event.preventDefault(); document.getElementById('delete-form66').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form66"
                                    action="https://ajautosltd.com/customers/66" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in66">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel66">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/66" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-66" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-66" value="samer ahmed"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-66"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-66" name="phone"
                                                    value="07424313930" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-66"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-66" name="email"
                                                    value="sameerahmed.sa7@gmail.com" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-66"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-66"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-66" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-66-1"
                                                    value="WL13AXM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-66" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-66-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="97">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FG06LVB<br />
                                                                TA16LHA<br />
                                
                            </td>
                            <td>HAMZA</td>
                            <td>
                                                                TOYOTA<br />
                                                                MERCEDES-BENZ<br />
                                                            </td>
                            <td>
                                                                2006<br />
                                                                2016<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07450458231</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/67" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in67">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/67"
                                    onclick="event.preventDefault(); document.getElementById('delete-form67').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form67"
                                    action="https://ajautosltd.com/customers/67" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in67">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel67">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/67" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-67" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-67" value="HAMZA"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-67"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-67" name="phone"
                                                    value="07450458231" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-67"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-67" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-67"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-67"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-67" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-67-1"
                                                    value="FG06LVB" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-67" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-67-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="98">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-67" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-67-2"
                                                    value="TA16LHA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-67" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-67-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="117">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                SH59WPA<br />
                                
                            </td>
                            <td>LEAH</td>
                            <td>
                                                                VOLVO<br />
                                                            </td>
                            <td>
                                                                2009<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07940958592</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/68" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in68">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/68"
                                    onclick="event.preventDefault(); document.getElementById('delete-form68').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form68"
                                    action="https://ajautosltd.com/customers/68" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in68">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel68">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/68" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-68" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-68" value="LEAH"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-68"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-68" name="phone"
                                                    value="07940958592" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-68"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-68" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-68"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-68"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-68" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-68-1"
                                                    value="SH59WPA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-68" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-68-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="99">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                WN11EPE<br />
                                                                PF56PWY<br />
                                
                            </td>
                            <td>NISAR LATIF</td>
                            <td>
                                                                LEXUS<br />
                                                                HONDA<br />
                                                            </td>
                            <td>
                                                                2011<br />
                                                                2007<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07539393615</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/69" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in69">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/69"
                                    onclick="event.preventDefault(); document.getElementById('delete-form69').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form69"
                                    action="https://ajautosltd.com/customers/69" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in69">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel69">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/69" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-69" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-69" value="NISAR LATIF"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-69"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-69" name="phone"
                                                    value="07539393615" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-69"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-69" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-69"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-69"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-69" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-69-1"
                                                    value="WN11EPE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-69" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-69-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="100">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-69" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-69-2"
                                                    value="PF56PWY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-69" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-69-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="101">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                LX61HZS<br />
                                
                            </td>
                            <td>munir</td>
                            <td>
                                                                HONDA<br />
                                                            </td>
                            <td>
                                                                2011<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07702075124</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/70" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in70">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/70"
                                    onclick="event.preventDefault(); document.getElementById('delete-form70').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form70"
                                    action="https://ajautosltd.com/customers/70" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in70">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel70">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/70" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-70" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-70" value="munir"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-70"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-70" name="phone"
                                                    value="07702075124" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-70"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-70" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-70"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-70"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-70" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-70-1"
                                                    value="LX61HZS" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-70" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-70-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="102">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FL60VUA<br />
                                
                            </td>
                            <td>zain</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2010<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07818431557</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/71" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in71">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/71"
                                    onclick="event.preventDefault(); document.getElementById('delete-form71').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form71"
                                    action="https://ajautosltd.com/customers/71" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in71">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel71">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/71" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-71" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-71" value="zain"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-71"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-71" name="phone"
                                                    value="07818431557" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-71"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-71" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-71"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-71"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-71" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-71-1"
                                                    value="FL60VUA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-71" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-71-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="103">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                PK15OLM<br />
                                
                            </td>
                            <td>NOORUL</td>
                            <td>
                                                                MERCEDES-BENZ<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07711003786</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/72" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in72">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/72"
                                    onclick="event.preventDefault(); document.getElementById('delete-form72').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form72"
                                    action="https://ajautosltd.com/customers/72" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in72">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel72">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/72" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-72" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-72" value="NOORUL"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-72"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-72" name="phone"
                                                    value="07711003786" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-72"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-72" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-72"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-72"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-72" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-72-1"
                                                    value="PK15OLM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-72" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-72-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="107">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                K44DCR<br />
                                                                HU56EYN<br />
                                
                            </td>
                            <td>KADIR</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                                MERCEDES-BENZ<br />
                                                            </td>
                            <td>
                                                                1998<br />
                                                                2009<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07835609200</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/73" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in73">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/73"
                                    onclick="event.preventDefault(); document.getElementById('delete-form73').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form73"
                                    action="https://ajautosltd.com/customers/73" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in73">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel73">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/73" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-73" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-73" value="KADIR"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-73"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-73" name="phone"
                                                    value="07835609200" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-73"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-73" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-73"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-73"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-73" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-73-1"
                                                    value="K44DCR" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-73" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-73-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="109">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-73" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-73-2"
                                                    value="HU56EYN" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-73" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-73-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="111">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                VE54BOU<br />
                                
                            </td>
                            <td>Gunsham</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2004<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07711738741</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/74" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in74">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/74"
                                    onclick="event.preventDefault(); document.getElementById('delete-form74').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form74"
                                    action="https://ajautosltd.com/customers/74" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in74">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel74">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/74" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-74" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-74" value="Gunsham"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-74"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-74" name="phone"
                                                    value="07711738741" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-74"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-74" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-74"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-74"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-74" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-74-1"
                                                    value="VE54BOU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-74" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-74-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="112">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YX60VLN<br />
                                
                            </td>
                            <td>sharin</td>
                            <td>
                                                                HYUNDAI<br />
                                                            </td>
                            <td>
                                                                2010<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07596038020</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/75" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in75">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/75"
                                    onclick="event.preventDefault(); document.getElementById('delete-form75').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form75"
                                    action="https://ajautosltd.com/customers/75" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in75">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel75">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/75" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-75" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-75" value="sharin"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-75"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-75" name="phone"
                                                    value="07596038020" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-75"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-75" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-75"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-75"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-75" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-75-1"
                                                    value="YX60VLN" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-75" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-75-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="113">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FD56SRY<br />
                                
                            </td>
                            <td>shahzad</td>
                            <td>
                                                                MERCEDES<br />
                                                            </td>
                            <td>
                                                                2007<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07952753266</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/76" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in76">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/76"
                                    onclick="event.preventDefault(); document.getElementById('delete-form76').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form76"
                                    action="https://ajautosltd.com/customers/76" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in76">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel76">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/76" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-76" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-76" value="shahzad"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-76"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-76" name="phone"
                                                    value="07952753266" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-76"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-76" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-76"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-76"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-76" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-76-1"
                                                    value="FD56SRY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-76" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-76-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="116">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YS63VSO<br />
                                
                            </td>
                            <td>JASWANT</td>
                            <td>
                                                                KIA<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07440089187</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/77" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in77">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/77"
                                    onclick="event.preventDefault(); document.getElementById('delete-form77').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form77"
                                    action="https://ajautosltd.com/customers/77" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in77">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel77">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/77" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-77" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-77" value="JASWANT"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-77"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-77" name="phone"
                                                    value="07440089187" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-77"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-77" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-77"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-77"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-77" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-77-1"
                                                    value="YS63VSO" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-77" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-77-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="118">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                BG59ZLU<br />
                                                                EJ17YXD<br />
                                                                EY15KZH<br />
                                
                            </td>
                            <td>ramzan</td>
                            <td>
                                                                MERCEDES<br />
                                                                AUDI<br />
                                                                BENTLEY<br />
                                                            </td>
                            <td>
                                                                2009<br />
                                                                2017<br />
                                                                2015<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07484625152</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/78" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in78">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/78"
                                    onclick="event.preventDefault(); document.getElementById('delete-form78').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form78"
                                    action="https://ajautosltd.com/customers/78" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in78">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel78">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/78" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-78" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-78" value="ramzan"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-78"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-78" name="phone"
                                                    value="07484625152" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-78"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-78" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-78"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-78"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-78" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-78-1"
                                                    value="BG59ZLU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-78" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-78-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="119">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-78" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-78-2"
                                                    value="EJ17YXD" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-78" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-78-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="120">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-78" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-78-3"
                                                    value="EY15KZH" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-78" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-78-3"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="121">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                DU65WZC<br />
                                                                YB54LYC<br />
                                                                YE59ZNF<br />
                                                                KS10JRZ<br />
                                                                EA08WCR<br />
                                
                            </td>
                            <td>DECENT MOTORS</td>
                            <td>
                                                                NISSAN<br />
                                                                VOLKSWAGEN<br />
                                                                MINI<br />
                                                                PEUGEOT<br />
                                                                PEUGEOT<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                                2005<br />
                                                                2009<br />
                                                                2010<br />
                                                                2008<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                                0<br />
                                                                74783<br />
                                                                11<br />
                                                            </td>
                            <td>07709797553</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/79" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in79">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/79"
                                    onclick="event.preventDefault(); document.getElementById('delete-form79').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form79"
                                    action="https://ajautosltd.com/customers/79" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in79">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel79">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/79" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-79" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-79" value="DECENT MOTORS"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-79"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-79" name="phone"
                                                    value="07709797553" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-79"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-79" name="email"
                                                    value="decentmotors88@gmail.com" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-79"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-79"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-79" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-79-1"
                                                    value="DU65WZC" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-79" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-79-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="122">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-79" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-79-2"
                                                    value="YB54LYC" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-79" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-79-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="124">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-79" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-79-3"
                                                    value="YE59ZNF" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-79" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-79-3"
                                                    value="0" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="133">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-79" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-79-4"
                                                    value="KS10JRZ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-79" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-79-4"
                                                    value="74783" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="139">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-79" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-79-5"
                                                    value="EA08WCR" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-79" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-79-5"
                                                    value="11" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="140">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                SK63RVT<br />
                                
                            </td>
                            <td>GANZA</td>
                            <td>
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07453883113</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/80" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in80">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/80"
                                    onclick="event.preventDefault(); document.getElementById('delete-form80').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form80"
                                    action="https://ajautosltd.com/customers/80" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in80">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel80">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/80" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-80" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-80" value="GANZA"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-80"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-80" name="phone"
                                                    value="07453883113" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-80"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-80" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-80"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-80"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-80" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-80-1"
                                                    value="SK63RVT" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-80" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-80-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="123">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                K17JSB<br />
                                                                X17GSB<br />
                                
                            </td>
                            <td>sukhi</td>
                            <td>
                                                                MERCEDES-BENZ<br />
                                                                TESLA<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                                2020<br />
                                                            </td>
                            <td>
                                                                <br />
                                                                <br />
                                                            </td>
                            <td>07791806555</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/81" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in81">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/81"
                                    onclick="event.preventDefault(); document.getElementById('delete-form81').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form81"
                                    action="https://ajautosltd.com/customers/81" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in81">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel81">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/81" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-81" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-81" value="sukhi"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-81"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-81" name="phone"
                                                    value="07791806555" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-81"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-81" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-81"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-81"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-81" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-81-1"
                                                    value="K17JSB" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-81" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-81-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="125">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-81" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-81-2"
                                                    value="X17GSB" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-81" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-81-2"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="126">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                AV10UUY<br />
                                                                FH09DMX<br />
                                
                            </td>
                            <td>Car Palace Leicester Itd</td>
                            <td>
                                                                PEUGEOT<br />
                                                                VAUXHALL<br />
                                                            </td>
                            <td>
                                                                2010<br />
                                                                2009<br />
                                                            </td>
                            <td>
                                                                0Km<br />
                                                                61805<br />
                                                            </td>
                            <td>0777821729162</td>
                            <td>Leicester</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/97" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in97">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/97"
                                    onclick="event.preventDefault(); document.getElementById('delete-form97').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form97"
                                    action="https://ajautosltd.com/customers/97" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in97">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel97">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/97" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-97" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-97" value="Car Palace Leicester Itd"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-97"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-97" name="phone"
                                                    value="0777821729162" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-97"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-97" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-97"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-97"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York">Leicester</textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-97" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-97-1"
                                                    value="AV10UUY" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-97" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-97-1"
                                                    value="0Km" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="130">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-97" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-97-2"
                                                    value="FH09DMX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-97" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-97-2"
                                                    value="61805" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="155">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                NJ65NDO<br />
                                
                            </td>
                            <td>baber khalid</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                            </td>
                            <td>
                                                                172125<br />
                                                            </td>
                            <td>07710148913</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/98" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in98">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/98"
                                    onclick="event.preventDefault(); document.getElementById('delete-form98').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form98"
                                    action="https://ajautosltd.com/customers/98" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in98">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel98">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/98" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-98" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-98" value="baber khalid"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-98"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-98" name="phone"
                                                    value="07710148913" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-98"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-98" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-98"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-98"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-98" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-98-1"
                                                    value="NJ65NDO" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-98" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-98-1"
                                                    value="172125" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="131">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                DC66GCX<br />
                                
                            </td>
                            <td>SEMMA</td>
                            <td>
                                                                SUZUKI<br />
                                                            </td>
                            <td>
                                                                2016<br />
                                                            </td>
                            <td>
                                                                38841<br />
                                                            </td>
                            <td>07828234794</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/99" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in99">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/99"
                                    onclick="event.preventDefault(); document.getElementById('delete-form99').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form99"
                                    action="https://ajautosltd.com/customers/99" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in99">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel99">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/99" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-99" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-99" value="SEMMA"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-99"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-99" name="phone"
                                                    value="07828234794" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-99"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-99" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-99"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-99"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-99" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-99-1"
                                                    value="DC66GCX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-99" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-99-1"
                                                    value="38841" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="132">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                RO15WPA<br />
                                
                            </td>
                            <td>Saima</td>
                            <td>
                                                                SEAT<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                            </td>
                            <td>
                                                                86864<br />
                                                            </td>
                            <td>07771533186</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/100" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/100"
                                    onclick="event.preventDefault(); document.getElementById('delete-form100').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form100"
                                    action="https://ajautosltd.com/customers/100" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in100">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel100">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/100" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-100" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-100" value="Saima"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-100"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-100" name="phone"
                                                    value="07771533186" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-100"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-100" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-100"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-100"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-100" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-100-1"
                                                    value="RO15WPA" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-100" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-100-1"
                                                    value="86864" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="135">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YG08WSE<br />
                                
                            </td>
                            <td>Riasat</td>
                            <td>
                                                                HONDA<br />
                                                            </td>
                            <td>
                                                                2008<br />
                                                            </td>
                            <td>
                                                                87215<br />
                                                            </td>
                            <td>07807618082</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/101" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in101">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/101"
                                    onclick="event.preventDefault(); document.getElementById('delete-form101').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form101"
                                    action="https://ajautosltd.com/customers/101" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in101">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel101">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/101" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-101" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-101" value="Riasat"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-101"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-101" name="phone"
                                                    value="07807618082" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-101"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-101" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-101"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-101"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-101" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-101-1"
                                                    value="YG08WSE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-101" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-101-1"
                                                    value="87215" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="138">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YR62KXL<br />
                                
                            </td>
                            <td>Sirwan Ahmed</td>
                            <td>
                                                                AUDI<br />
                                                            </td>
                            <td>
                                                                2012<br />
                                                            </td>
                            <td>
                                                                65014<br />
                                                            </td>
                            <td>07400060300</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/102" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in102">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/102"
                                    onclick="event.preventDefault(); document.getElementById('delete-form102').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form102"
                                    action="https://ajautosltd.com/customers/102" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in102">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel102">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/102" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-102" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-102" value="Sirwan Ahmed"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-102"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-102" name="phone"
                                                    value="07400060300" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-102"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-102" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-102"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-102"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-102" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-102-1"
                                                    value="YR62KXL" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-102" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-102-1"
                                                    value="65014" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="141">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                SC65ZLK<br />
                                
                            </td>
                            <td>Y.M</td>
                            <td>
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                            </td>
                            <td>
                                                                84120<br />
                                                            </td>
                            <td>07513884323</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/103" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in103">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/103"
                                    onclick="event.preventDefault(); document.getElementById('delete-form103').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form103"
                                    action="https://ajautosltd.com/customers/103" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in103">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel103">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/103" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-103" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-103" value="Y.M"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-103"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-103" name="phone"
                                                    value="07513884323" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-103"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-103" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-103"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-103"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-103" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-103-1"
                                                    value="SC65ZLK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-103" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-103-1"
                                                    value="84120" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="142">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                EF13UWM<br />
                                
                            </td>
                            <td>ANETE</td>
                            <td>
                                                                FORD<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                95650<br />
                                                            </td>
                            <td>07760839775</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/104" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in104">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/104"
                                    onclick="event.preventDefault(); document.getElementById('delete-form104').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form104"
                                    action="https://ajautosltd.com/customers/104" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in104">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel104">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/104" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-104" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-104" value="ANETE"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-104"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-104" name="phone"
                                                    value="07760839775" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-104"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-104" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-104"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-104"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-104" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-104-1"
                                                    value="EF13UWM" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-104" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-104-1"
                                                    value="95650" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="143">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                BD64HLK<br />
                                
                            </td>
                            <td>IMAD</td>
                            <td>
                                                                NISSAN<br />
                                                            </td>
                            <td>
                                                                2014<br />
                                                            </td>
                            <td>
                                                                93125<br />
                                                            </td>
                            <td>07866173031</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/105" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in105">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/105"
                                    onclick="event.preventDefault(); document.getElementById('delete-form105').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form105"
                                    action="https://ajautosltd.com/customers/105" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in105">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel105">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/105" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-105" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-105" value="IMAD"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-105"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-105" name="phone"
                                                    value="07866173031" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-105"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-105" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-105"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-105"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-105" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-105-1"
                                                    value="BD64HLK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-105" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-105-1"
                                                    value="93125" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="144">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                PY15JOU<br />
                                
                            </td>
                            <td>Ashraf</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2015<br />
                                                            </td>
                            <td>
                                                                85124<br />
                                                            </td>
                            <td>07803165769</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/106" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in106">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/106"
                                    onclick="event.preventDefault(); document.getElementById('delete-form106').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form106"
                                    action="https://ajautosltd.com/customers/106" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in106">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel106">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/106" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-106" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-106" value="Ashraf"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-106"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-106" name="phone"
                                                    value="07803165769" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-106"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-106" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-106"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-106"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-106" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-106-1"
                                                    value="PY15JOU" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-106" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-106-1"
                                                    value="85124" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="145">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                VA17HAJ<br />
                                
                            </td>
                            <td>bipin</td>
                            <td>
                                                                NISSAN<br />
                                                            </td>
                            <td>
                                                                2020<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07711197710</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/107" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in107">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/107"
                                    onclick="event.preventDefault(); document.getElementById('delete-form107').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form107"
                                    action="https://ajautosltd.com/customers/107" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in107">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel107">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/107" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-107" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-107" value="bipin"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-107"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-107" name="phone"
                                                    value="07711197710" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-107"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-107" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-107"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-107"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-107" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-107-1"
                                                    value="VA17HAJ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-107" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-107-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="146">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                PF53UPX<br />
                                
                            </td>
                            <td>SHOUKAT</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2004<br />
                                                            </td>
                            <td>
                                                                0.00<br />
                                                            </td>
                            <td>03001234567</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/108" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in108">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/108"
                                    onclick="event.preventDefault(); document.getElementById('delete-form108').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form108"
                                    action="https://ajautosltd.com/customers/108" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in108">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel108">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/108" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-108" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-108" value="SHOUKAT"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-108"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-108" name="phone"
                                                    value="03001234567" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-108"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-108" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-108"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-108"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-108" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-108-1"
                                                    value="PF53UPX" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-108" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-108-1"
                                                    value="0.00" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="148">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YN13RHO<br />
                                                                MM63WPE<br />
                                
                            </td>
                            <td>arif</td>
                            <td>
                                                                TOYOTA<br />
                                                                VOLKSWAGEN<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                                2014<br />
                                                            </td>
                            <td>
                                                                89023<br />
                                                                185120<br />
                                                            </td>
                            <td>07727150348</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/109" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in109">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/109"
                                    onclick="event.preventDefault(); document.getElementById('delete-form109').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form109"
                                    action="https://ajautosltd.com/customers/109" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in109">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel109">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/109" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-109" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-109" value="arif"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-109"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-109" name="phone"
                                                    value="07727150348" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-109"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-109" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-109"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-109"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-109" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-109-1"
                                                    value="YN13RHO" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-109" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-109-1"
                                                    value="89023" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="151">
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-109" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-109-2"
                                                    value="MM63WPE" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-109" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-109-2"
                                                    value="185120" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="152">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                WD13FNK<br />
                                
                            </td>
                            <td>deepak</td>
                            <td>
                                                                MERCEDES-BENZ<br />
                                                            </td>
                            <td>
                                                                2013<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07976096183</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/110" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in110">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/110"
                                    onclick="event.preventDefault(); document.getElementById('delete-form110').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form110"
                                    action="https://ajautosltd.com/customers/110" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in110">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel110">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/110" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-110" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-110" value="deepak"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-110"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-110" name="phone"
                                                    value="07976096183" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-110"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-110" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-110"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-110"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-110" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-110-1"
                                                    value="WD13FNK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-110" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-110-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="153">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                FM51DWZ<br />
                                
                            </td>
                            <td>golden bakery</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2002<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07930200540</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/111" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in111">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/111"
                                    onclick="event.preventDefault(); document.getElementById('delete-form111').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form111"
                                    action="https://ajautosltd.com/customers/111" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in111">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel111">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/111" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-111" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-111" value="golden bakery"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-111"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-111" name="phone"
                                                    value="07930200540" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-111"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-111" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-111"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-111"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-111" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-111-1"
                                                    value="FM51DWZ" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-111" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-111-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="154">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                YB66VYK<br />
                                
                            </td>
                            <td>atif</td>
                            <td>
                                                                BMW<br />
                                                            </td>
                            <td>
                                                                2017<br />
                                                            </td>
                            <td>
                                                                <br />
                                                            </td>
                            <td>07809610613</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/112" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in112">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/112"
                                    onclick="event.preventDefault(); document.getElementById('delete-form112').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form112"
                                    action="https://ajautosltd.com/customers/112" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in112">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel112">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/112" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-112" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-112" value="atif"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-112"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-112" name="phone"
                                                    value="07809610613" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-112"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-112" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-112"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-112"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-112" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-112-1"
                                                    value="YB66VYK" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-112" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-112-1"
                                                    value="" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="156">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                                <tr>
                            <td></td>
                            <td>
                                                                LD56GNF<br />
                                
                            </td>
                            <td>kausar</td>
                            <td>
                                                                TOYOTA<br />
                                                            </td>
                            <td>
                                                                2006<br />
                                                            </td>
                            <td>
                                                                62207<br />
                                                            </td>
                            <td>07445373249</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    
                                
                                <a href="https://ajautosltd.com/customers/113" class="me-25"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Customer Invoices">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                                <a href="#" class="me-25" data-bs-toggle="modal" data-bs-placement="top"
                                    title="Edit Customer" data-bs-target="#modals-slide-in113">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a href="https://ajautosltd.com/customers/113"
                                    onclick="event.preventDefault(); document.getElementById('delete-form113').submit();"
                                    class="me-25" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete Customer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </a>
                                <form id="delete-form113"
                                    action="https://ajautosltd.com/customers/113" method="POST">
                                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                    <input type="hidden" name="_method" value="DELETE">                                </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in113">
                            <div class="modal-dialog">
                                <div class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel113">Edit Customer
                                        </h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <form action="https://ajautosltd.com/customers/113" method="POST">
                                            <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                            <input type="hidden" name="_method" value="PUT">                                            <div class="mb-1">
                                                <label for="customer-name-113" class="form-label">Customer
                                                    Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="customer-name-113" value="kausar"
                                                    placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-phone-113"
                                                    class="form-label">Phone</label>
                                                <input type="tel" class="form-control"
                                                    id="customer-phone-113" name="phone"
                                                    value="07445373249" placeholder="03001234567" required/>
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-email-113"
                                                    class="form-label">Customer Email</label>
                                                <input type="email" class="form-control"
                                                    id="customer-email-113" name="email"
                                                    value="" placeholder="john@example.com"
                                                     />
                                            </div>
                                            <div class="mb-1">
                                                <label for="customer-address-113"
                                                    class="form-label">Customer
                                                    Address</label>
                                                <textarea class="form-control" id="customer-address-113"
                                                    cols="2" rows="2" name="address"
                                                    placeholder="1307 Lady Bug Drive New York"></textarea>
                                            </div>
                                                                                        <div class="mb-1 position-relative">
                                                <label for="car-number-113" class="form-label">Car
                                                    Registration Number</label>
                                                <input type="text" class="form-control"
                                                    id="car-number-113-1"
                                                    value="LD56GNF" name="registration_number[]"
                                                    style="text-transform:uppercase" placeholder="LX123" required>
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="car-mileage-113" class="form-label">Car
                                                    Mileage</label>
                                                <input type="text" class="form-control"
                                                    id="car-mileage-113-1"
                                                    value="62207" name="mileage[]"
                                                    placeholder="0 km">
                                            </div>
                                            <input type="hidden" name="car_id[]" value="157">
                                                                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                                            </tbody>
                </table>
            </div>
            <!-- Modal to add new user starts-->
            <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                <div class="modal-dialog">
                    <div class="add-new-user modal-content pt-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <form action="https://ajautosltd.com/customers" method="POST">
                                <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                <div class="mb-1">
                                    <label for="customer-name" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" name="name" id="customer-name"
                                        placeholder="John Doe" required />
                                </div>
                                <div class="mb-1">
                                    <label for="customer-phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="customer-phone" name="phone"
                                        placeholder="03001234567" required/>
                                </div>
                                <div class="mb-1">
                                    <label for="customer-email" class="form-label">Customer Email</label>
                                    <input type="email" class="form-control" id="customer-email" name="email"
                                        placeholder="john@example.com"  />
                                </div>
                                <div class="mb-1">
                                    <label for="customer-address" class="form-label">Customer Address</label>
                                    <textarea class="form-control" id="customer-address" cols="2" rows="2"
                                        name="address" placeholder="1307 Lady Bug Drive New York"></textarea>
                                </div>
                                <div class="mb-1 position-relative">
                                    <label for="car-number" class="form-label">Car Registration Number</label>
                                    <input type="text" class="form-control" id="car-number" name="registration_number"
                                        style="text-transform:uppercase" placeholder="LX123" required>
                                </div>
                                <div class="mb-1 position-relative">
                                    <label for="car-mileage" class="form-label">Car
                                        Mileage</label>
                                    <input type="text" class="form-control"
                                        id="car-mileage" name="mileage"
                                        placeholder="0 km">
                                </div>
                                <div class="mb-1 d-flex flex-wrap mt-2">
                                    <button type="submit" class="btn btn-primary me-1">Add</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal to add new user Ends-->
        </div>
        <!-- list and filter end -->
    </section>
    <!-- users list ends -->

</div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-start d-block d-md-inline-block mt-25">
                COPYRIGHT &copy; 2025
                <a class="ms-25" href="#" target="_blank">MativeInc</a>
                <span class="d-none d-sm-inline-block">, All rights Reserved</span>
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


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
            newUserSidebar = $('.new-user-modal'),
            select = $('.select2'),
            statusObj = {
                1: {
                    title: 'Pending',
                    class: 'badge-light-warning'
                },
                2: {
                    title: 'Active',
                    class: 'badge-light-success'
                },
                3: {
                    title: 'Inactive',
                    class: 'badge-light-secondary'
                }
            };

        var assetPath = '../../../app-assets/',
            userView = 'app-user-view-account.html';

        if ($('body').attr('data-framework') === 'laravel') {
            assetPath = $('body').attr('data-asset-path');
            userView = assetPath + 'app/user/view/account';
        }

        select.each(function () {
            var $this = $(this);
            $this.wrap('<div class="position-relative"></div>');
            $this.select2({
                // the following code is used to disable x-scrollbar when click in select input and
                // take 100% width in responsive also
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: $this.parent()
            });
        });

        // Users List datatable
        if (dtUserTable.length) {
            dtUserTable.DataTable({
                autoWidth: false,
                columnDefs: [{
                        // For Responsive
                        className: 'control',
                        orderable: false,
                        responsivePriority: 2,
                        targets: 0,
                    },
                    {
                        // User full name and username
                        targets: 2,
                        responsivePriority: 4,
                    },
                    {
                        // User Role
                        targets: 1,
                    },
                    {
                        targets: 4,
                    },
                    {
                        // User Status
                        targets: 5,
                    },
                    {
                        // Actions
                        targets: -1,
                        title: 'Actions',
                        orderable: false,
                    }
                ],
                order: [
                    [1, 'asc']
                ],
                dom: '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                    '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                    '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                    '>t' +
                    '<"d-flex justify-content-between mx-2 row mb-1"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    '>',
                language: {
                    sLengthMenu: 'Show _MENU_',
                    search: 'Search',
                    searchPlaceholder: 'Search..'
                },
                // Buttons with Dropdown
                buttons: [{
                        extend: 'collection',
                        className: 'btn btn-outline-secondary dropdown-toggle me-2',
                        text: feather.icons['external-link'].toSvg({
                            class: 'font-small-4 me-50'
                        }) + 'Export',
                        buttons: [{
                                extend: 'print',
                                text: feather.icons['printer'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Print',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'csv',
                                text: feather.icons['file-text'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Csv',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'excel',
                                text: feather.icons['file'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Excel',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'pdf',
                                text: feather.icons['clipboard'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Pdf',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'copy',
                                text: feather.icons['copy'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Copy',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            }
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
                        text: 'Add New Customer',
                        className: 'add-new btn btn-primary',
                        attr: {
                            'data-bs-toggle': 'modal',
                            'data-bs-target': '#modals-slide-in'
                        },
                        init: function (api, node, config) {
                            $(node).removeClass('btn-secondary');
                        }
                    }
                ],
                // For responsive popup
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return 'Details of ' + data['full_name'];
                            }
                        }),
                        type: 'column',
                        renderer: function (api, rowIdx, columns) {
                            var data = $.map(columns, function (col, i) {
                                return col.columnIndex !==
                                    6 // ? Do not show row in modal popup if title is blank (for check box)
                                    ?
                                    '<tr data-dt-row="' +
                                    col.rowIdx +
                                    '" data-dt-column="' +
                                    col.columnIndex +
                                    '">' +
                                    '<td>' :
                                    '';
                            }).join('');
                            return data ? $('<table class="table"/>').append('<tbody>' + data +
                                '</tbody>') : false;
                        }
                    }
                },
                language: {
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                },
            });
        }

        dtUserTable.on('page.dt', function () {
            feather.replace();
        });

        var queryPath = 'https://ajautosltd.com/searchCar';

        $('.typeahead').typeahead({
            source: function (query, process) {
                return $.get(queryPath, {
                    query: query
                }, function (data) {
                    console.log(data);
                    return process(data.make);
                });
            },
            minLength: 3
        });
    });

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