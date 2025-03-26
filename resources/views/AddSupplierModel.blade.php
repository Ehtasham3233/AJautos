<!-- Modal to add new user starts-->
<div class="modal modal-slide-in new-user-modal fade" id="supplierModel">
    <div class="modal-dialog">
        <div class="add-new-user modal-content pt-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <form action="https://ajautosltd.com/suppliers" method="POST">
                    <input type="hidden" name="_token" value="c40h01ahdu9WHKO0NbTae0bngpVWapxPeLWkeK87">                                <div class="mb-1">
                        <label for="supplier-name" class="form-label">Supplier Name</label>
                        <input type="text" class="form-control" name="name" id="supplier-name"
                               placeholder="John Doe" required />
                    </div>
                    <div class="mb-1">
                        <label for="supplier-phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="supplier-phone" name="phone"
                               placeholder="03001234567" required />
                    </div>
                    <div class="mb-1">
                        <label for="supplier-email" class="form-label">Supplier Email</label>
                        <input type="email" class="form-control" id="supplier-email" name="email"
                               placeholder="john@example.com" />
                    </div>
                    <div class="mb-1">
                        <label for="supplier-address" class="form-label">Supplier Address</label>
                        <textarea class="form-control" id="supplier-address" cols="2" rows="2"
                                  name="address" placeholder="1307 Lady Bug Drive New York"></textarea>
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
