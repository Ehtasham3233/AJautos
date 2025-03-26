<!-- Modal to add new supplier starts -->
<div class="modal modal-slide-in new-user-modal fade" id="supplierInvoiseModel">
    <div class="modal-dialog">
        <div class="add-new-user modal-content pt-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Add Supplier Invoice</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <form action="https://ajautosltd.com/suppliers" method="POST">
                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">

                    <!-- Supplier Select2 -->
                    <div class="mb-1">
                        <label for="supplier-select" class="form-label">Select Supplier</label>
                        <select class="form-control select2" id="supplier-select" name="supplier_id" required>
                            <option value="" disabled selected>Select Supplier</option>
                            @foreach($suppliers as $supplier)
                                <option value="$supplier->id">{{$supplier->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Invoice Number -->
                    <div class="mb-1">
                        <label for="invoice-number" class="form-label">Invoice Number</label>
                        <input type="text" class="form-control" id="invoice-number" name="invoice_number"
                               placeholder="INV-12345" required />
                    </div>

                    <!-- Amount -->
                    <div class="mb-1">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount"
                               placeholder="Enter Amount" required />
                    </div>

                    <!-- Quantity -->
                    <div class="mb-1">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity"
                               placeholder="Enter Quantity" required />
                    </div>

                    <div class="mb-1 d-flex flex-wrap mt-2">
                        <button type="submit" class="btn btn-primary me-1">Add Invoice</button>
                        <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal to add new supplier Ends -->

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        // Initialize Select2
        $('#supplier-select').select2({
            width: '100%', // Adjust width
            placeholder: "Select Supplier",
            allowClear: true
        });

        // You can dynamically load suppliers via AJAX here if needed
    });
</script>
