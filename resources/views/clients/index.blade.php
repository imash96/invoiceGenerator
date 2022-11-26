@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center p-3 text-white bg-purple rounded shadow-sm">
            <div class="col-6 d-flex align-items-center">
                <i class="bi bi-person-rolodex me-2" style=" font-size: 2.5em; "></i><span class="fs-3 fw-bold">Clients</span>
            </div>
            <div class="col-6">
                <a class="btn btn-primary d-inline-block float-end ms-4" href="{{ route('clients.create') }}"
                    role="button">Create new</a>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @forelse($clients as $client)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-{{ $client->id }}" aria-expanded="false"
                            aria-controls="flush-{{ $client->id }}">
                            {{ $client->business_name }}
                        </button>
                    </h2>
                    <div id="flush-{{ $client->id }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="row accordion-body">
                            <div class="col-sm-8 ps-4">
                                <code>Client Name: </code>{{ $client->first_name }} {{ $client->last_name }}<br>
                                <code>Email: </code>{{ $client->email_address }}<br>
                                <code>Number: </code>{{ $client->phone_number }}<br>
                                <code>GSTIN: </code>{{ $client->gstin }}<br>
                            </div>
                            <div class="col-sm-4 mt-2">
                                <div class="row align-items-center">
                                    <div class="vstack gap-2 col-sm-4 mx-3">
                                        <a role="button" class="btn btn-secondary" href="{{ route('invoices.create', ['client_id' => $client->id]) }}">Create Invoice</a>
                                        <a role="button" class="btn btn-outline-secondary" href="{{ route('clients.edit', $client->id) }}">Edit Client</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row bg-light p-3">
                    <div class="col-sm-12">
                        <a role="button" class="btn btn-secondary" href="{{route('clients.create')}}">Create new client</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
