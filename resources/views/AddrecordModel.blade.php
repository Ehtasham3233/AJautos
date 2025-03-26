<!-- Modal to add new user starts-->
<div class="modal modal-slide-in new-user-modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">>
         <div class="modal-dialog">
            <div class="add-new-user modal-content pt-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title">Add Customer Car</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <form
                        action="{{ route('cars.store') }}"
                        method="POST">
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
</div>
<!-- Modal to add new user Ends-->
