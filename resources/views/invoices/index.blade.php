@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center p-3 text-white bg-purple rounded shadow-sm">
            <div class="col-6 d-flex align-items-center">
                <i class="bi bi-receipt me-2" style=" font-size: 2.5em; "></i></i><span class="fs-3 fw-bold">Invoices</span>
            </div>
            <div class="col-6">
                <a class="btn btn-primary d-inline-block float-end ms-4" href="{{ route('invoices.create') }}"
                    role="button">Create new</a>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @forelse($invoices as $invoice)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-{{ $invoice->id }}" aria-expanded="false"
                            aria-controls="flush-{{ $invoice->id }}">
                            Invoice no: {{ $invoice->invoice_number }}
                        </button>
                    </h2>
                    <div id="flush-{{ $invoice->id }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="row accordion-body">
                            <div class="col-sm-8 ps-4">
                                <code>Client Name: </code>{{ $invoice->client->first_name }} {{ $invoice->client->last_name }}<br>
                                <code>Invoice amount: </code>${{number_format($invoice->amount, 2)}}<br>
                                <code>Invoice date: </code><?php if ($invoice->invoice_date ==! null) echo date("d M, Y", strtotime($invoice->invoice_date));?><br>
                                <code>Status: </code>{{$invoice->status}}<br>
                            </div>
                            <div class="col-sm-4 mt-2">
                                <div class="row align-items-center">
                                    <div class="vstack gap-2 col-sm-4 mx-3">
                                        <a role="button" class="btn btn-secondary" href="{{ route('invoices.show', $invoice->id) }}">View details</a>
                                        <a role="button" class="btn btn-outline-secondary" href="{{ route('invoices.edit', $invoice->id) }}">Edit invoice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row bg-light p-3">
                    <div class="col-sm-12">
                        No records found
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection