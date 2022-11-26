@extends('layouts.app')

@section('content')
    <body class="text-center">

        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

            <main role="main" class="inner cover">
                <h1 class="cover-heading text-white">Invoice-Generator</h1>
                <p class="lead text-white">Create your business profile and start making downloadable invoices! You can also
                    create/manage clients, invoices, payments, and balances.</p>
                <p class="lead">
                    <a href='{{ route('invoices.create') }}' class='btn btn-md btn-primary'>Create Invoice</a><br><br>
                    <a href="{{route('clients.index')}}" class="btn btn-md btn-warning">Clients</a>
                    <a href="{{route('invoices.index')}}" class="btn btn-md btn-info">Invoices</a>
                    <a href="{{route('payments.index')}}" class="btn btn-md btn-success">Payments</a>
                </p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                </div>
            </footer>
        </div>
    @endsection
