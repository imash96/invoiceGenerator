@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center p-3 text-white bg-purple rounded shadow-sm">
            <div class="col-10 d-flex align-items-center">
                <i class="bi bi-receipt me-2" style=" font-size: 2.5em; "></i></i><span class="fs-3 fw-bold">Edit
                    invoice</span>
            </div>
            <div class="col-2">
                <a class="btn btn-primary d-inline-block float-end ms-4" href="{{ route('invoices.create') }}"
                    role="button">Save</a>
            </div>
        </div>
        <div class=" container-fluid p-3 mb-2 bg-light rounded-3">
            <div class="row">
                <div class="col-lg-4">
                    <span class="text-uppercase fs-6 ms-1 fw-bold py-2">Ship to</span>
                    <div class="mb-1">
                        <input class="form-control" type="text" placeholder="Enter Company Name"
                            aria-label="Enter Company Name">
                    </div>
                    <div class="mb-1">
                        <textarea rows="5" class="form-control" placeholder="Enter Name and Address" id="STnameAddress" rows="3"></textarea>
                    </div>
                    <input class="form-control" type="text" placeholder="GSTIN" aria-label="GSTIN">
                </div>
                <div class="col-lg-4">
                    <span class="text-uppercase fs-6 ms-1 fw-bold py-2">Bill to</span>
                    <div class="mb-1">
                        <input class="form-control" type="text" placeholder="Enter Company Name"
                            aria-label="Enter Company Name">
                    </div>
                    <div class="mb-1">
                        <textarea rows="5" class="form-control" placeholder="Enter Name and Address" id="BTnameAddress" rows="3"></textarea>
                    </div>
                    <input class="form-control" type="text" placeholder="Palce of Supply" aria-label="Palce of Supply">
                </div>
                <div class="col-lg-4">
                    <span class="text-uppercase fs-6 ms-1 fw-bold py-2">Invoice deatils</span>
                    <div class="input-group">
                        <input type="text" aria-label="Invoice No" placeholder="Invoice No" class="form-control">
                        <input type="date" aria-label="Invoice Date" placeholder="Invoice Date" class="form-control">
                    </div>
                    <div class="input-group mt-2">
                        <input type="text" aria-label="PO No" placeholder="PO No" class="form-control">
                        <input type="date" aria-label="PO Date" placeholder="PO Date" class="form-control">
                    </div>
                    <div class="input-group mt-2">
                        <input type="text" aria-label="Challan No" placeholder="Challan No" class="form-control">
                        <input type="text" aria-label="L.R. No" placeholder="L.R. No" class="form-control">
                    </div>
                    <input type="text" aria-label="e-Way Bill no" placeholder="e-Way Bill no" class="form-control mt-2">
                    <div class="input-group input-group-sm mt-2" style=" height: 2.1rem; ">
                        <span class="input-group-text" id="inputGroup-sizing-sm">GST Type</span>
                        <select class="form-select" id="inputGroupSelect01">
                            <option value="sgst">SGST</option>
                            <option value="sgst">IGST</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container-fluid p-3 mb-2 bg-light rounded-3">
            <div class="row">
                Product Description
            </div>
        </div>
    </div>
@endsection
