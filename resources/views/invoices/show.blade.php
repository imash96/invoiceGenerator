@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-light h-100 px-lg-5">
        <div class="row d-flex align-items-center my-3">
            <div class="col-sm-9 mb-2">
                <span style="color: #7e8d9f;font-size: 1.3em;">Invoice No: <strong>HW27-IN2210-159</strong></span>
                <br>
                <span style="color: #7e8d9f;font-size: 1em;">Invoice Date: <strong>02 Nov, 2022</strong></span>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-dark text-capitalize border-0 float-sm-end me-2" href="{{ route('invoices.show', $invoice->id) }}"><i class="bi bi-printer-fill text-white"></i> Print</a>
                <a class="btn btn-dark text-capitalize border-0 float-sm-end me-2" href="{{ route('invoices.edit', $invoice->id) }}"><i class="bi bi-pencil-square text-white"></i> Edit</a>
            </div>
        </div>
        <hr>
        <div class="container-fulid">
            <div class="row px-3">
                <h2 class="text-muted fw-semibold">Tax Invoice</h2>
                <div class="col-md-4">
                    <address>
                        <ul class="list-unstyled">
                            <li class="text-muted fw-semibold">Ship To:<br><span style="color:#5d9fc5 ;">John Lorem</span></li>
                            <li class="text-muted fw-semibold">Street, City</li>
                            <li class="text-muted fw-semibold">State, Country</li>
                            <li class="text-muted fw-semibold"><i class="fas fa-phone"></i> 123-456-789</li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-4">
                    <address>
                        <ul class="list-unstyled">
                            <li class="text-muted fw-semibold">Bill To:<br><span style="color:#5d9fc5 ;">John Lorem</span></li>
                            <li class="text-muted fw-semibold">Street, City</li>
                            <li class="text-muted fw-semibold">State, Country</li>
                            <li class="text-muted fw-semibold"><i class="fas fa-phone"></i> 123-456-789</li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li class="text-muted fw-semibold"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="fw-bold fst-italic">PO no: </span>HW27-PO2210-250<a href="#"
                                class="badge bg-info text-black fw-bold ms-1">View PO</a></li>
                        <li class="text-muted fw-semibold"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="fw-bold fst-italic">PO Date: </span>13 Oct,2021</li>
                        <li class="text-muted fw-semibold"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="fw-bold fst-italic">Challanno: </span>159</li>
                        <li class="text-muted fw-semibold"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="fw-bold fst-italic">e-Way Billno: </span>601467849789</li>
                        <li class="text-muted fw-semibold"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="me-1 fw-bold">Place of Supply: </span><span>27 - Maharashtra</span></li>
                    </ul>
                </div>
            </div>

            <div class="row my-2 mx-1 table-responsive">
                <table class="table table-striped table-bordered">
                    <thead style="background-color:#84B0CA ;" class="text-white fw-semibold">
                        <tr style=" text-align: center; vertical-align: middle; ">
                            <th scope="col">#</th>
                            <th scope="col" style=" width: 50%; ">Particulars<br>(Description)</th>
                            <th scope="col">HSN<br>Code</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Rate(₹)</th>
                            <th scope="col">Taxable<br>Value (₹)</th>
                            <th scope="col">CGST<br>Rate</th>
                            <th scope="col">CGST<br>(₹)</th>
                            <th scope="col">SGST<br>Rate</th>
                            <th scope="col">SGST<br>(₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>5GU3KB GEAR BOXZD<br>Frame90mm GU Type Ratio1:3 Without Flange</td>
                            <td>42031010</td>
                            <td>999</td>
                            <td>PSC</td>
                            <td>9999999.99</td>
                            <td>9999999.99</td>
                            <td>9%</td>
                            <td>9999999.99</td>
                            <td>9%</td>
                            <td>9999999.99</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>MHMF042L1U2M<br>(Panasonic400W A6SERIES MOTOR W/O BRAKE with Battery)</td>
                            <td>42031010</td>
                            <td>999</td>
                            <td>PSC</td>
                            <td>9999999.99</td>
                            <td>9999999.99</td>
                            <td>9%</td>
                            <td>9999999.99</td>
                            <td>9%</td>
                            <td>9999999.99</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>MBDLN25BE<br>(Panasonic400W A6SERIES ETHERCAT DRIVE)</td>
                            <td>42031010</td>
                            <td>999</td>
                            <td>PSC</td>
                            <td>9999999.99</td>
                            <td>9999999.99</td>
                            <td>9%</td>
                            <td>9999999.99</td>
                            <td>9%</td>
                            <td>9999999.99</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan=7 colspan=2></td>
                            <td class="fw-bold fst-italic" colspan=4>Freight</td>
                            <td class="text-end fw-semibold">2000.00</td>
                            <td class="text-center fw-semibold">9%</td>
                            <td class="text-end fw-semibold">180.00</td>
                            <td class="text-center fw-semibold">9%</td>
                            <td class="text-end fw-semibold">180.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fst-italic" colspan=4>Insurance</td>
                            <td class="text-end fw-semibold">0.00</td>
                            <td class="text-center fw-semibold">-</td>
                            <td class="text-end fw-semibold">0.00</td>
                            <td class="text-center fw-semibold">-</td>
                            <td class="text-end fw-semibold">0.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fst-italic" colspan=4>Packing & Forwding </td>
                            <td class="text-end fw-semibold">0.00</td>
                            <td class="text-center fw-semibold">-</td>
                            <td class="text-end fw-semibold">0.00</td>
                            <td class="text-center fw-semibold">-</td>
                            <td class="text-end fw-semibold">0.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fst-italic" colspan=4>Subtotal</td>
                            <td class="text-end fw-semibold">99999.99</td>
                            <td class="text-end fw-semibold" colspan=2>99.99</td>
                            <td class="text-end fw-semibold" colspan=2>99.99</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fst-italic" colspan=4>Roundoff</td>
                            <td class="text-end fw-semibold" colspan="5">0.89</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fst-italic" colspan=4>Total Invoice Value</td>
                            <td class="text-end fw-bold" colspan="5">10000000.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold fst-italic" colspan=4>Total Invoice Value(In word)</td>
                            <td class="text-center fw-bold" colspan="5">Ninety Nine Lakh Ninety NineThousand Ninety
                                Nine Hundred Ninety Nine Only</td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="row mx-1 thanks">
                <div class="col-8">Thank you!</div><span class="col-4 float-end"
                    style="font-size: 0.75em;text-align: right;">E. & O.E.</span>
            </div>
            <div class="notices mx-1">
                <div>NOTICE:</div>
                <div class="notice">1. Goods sent to order will not be taken back</div>
                <div class="notice">2. Interest @18% p.a. willbe chargedifnotpaidondemand.</div>
                <div class="notice">3. Subject to Mumbai Jurisdiction</div>
                <div class="notice">4. 100% Advance payment</div>
            </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>

        </div>
    </div>
@endsection
