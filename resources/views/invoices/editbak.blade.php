@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container">
        <h1>Edit Invoice</h1>
        <div class="row" style="padding-top: 10px">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Invoice</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('invoices.update', $invoice->id) }}">
                            {{ method_field('PUT') }}
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    Client:
                                    <input type="text" name="client_id" value="{{ $invoice->client->id }}"
                                        class="form-control" hidden />
                                    <input type="text" value="{{ $invoice->client->business_name }}" class="form-control"
                                        disabled />
                                    <input type="text"
                                        value="{{ $invoice->client->first_name }} {{ $invoice->client->last_name }}"
                                        class="form-control" disabled />
                                    <input type="text" value="{{ $invoice->client->email_address }}" class="form-control"
                                        disabled />
                                    <a href="{{ route('clients.edit', $invoice->client->id) }}">Edit Client</a> | <a
                                        href="{{ route('clients.show', $invoice->client->id) }}">View Client</a>
                                    <br>
                                    Invoice Notes:
                                    <textarea name="private_notes" class="form-control">{{ $invoice->private_notes }}</textarea>
                                </div>
                                <div class="col-md-4">
                                    Invoice Date:
                                    <input type="date" name="invoice_date" value="{{ $invoice->invoice_date }}"
                                        class="form-control" />
                                    Due Date:
                                    <input type="date" name="due_date" value="{{ $invoice->due_date }}"
                                        class="form-control" />
                                    Deposit Amount:
                                    <input type="text" name="deposit_amount" value="{{ $invoice->deposit_amount }}"
                                        class="form-control" />
                                </div>
                                <div class="col-md-4">
                                    Invoice Number:
                                    <input type="text" name="invoice_number" value="{{ $invoice->invoice_number }}"
                                        class="form-control" />
                                    Discount:
                                    <input type="text" name="discount" value="{{ $invoice->discount }}"
                                        class="form-control" />
                                    Discount Type:
                                    <select id="discount_type" name="discount_type" class="form-control">
                                        <option value="Amount" <?php if ($invoice->discount_type == 'Amount') {
                                            echo ' selected="selected"';
                                        } ?>>Amount</option>
                                        <option value="Percent" <?php if ($invoice->discount_type == 'Percent') {
                                            echo ' selected="selected"';
                                        } ?>>Percent</option>
                                    </select>

                                </div>

                            </div>
                            <input type="submit" value="Save" class="btn btn-primary float-right">
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Items</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <th>Invoice Number</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Unit Cost</th>
                                <th>Quantity</th>
                                <th>Line Total</th>
                                <th></th>
                            </thead>
                            <tbody>
                                {{-- @forelse($invoice->products as $product)
                                    <tr>
                                        <td>{{ $product->invoice->invoice_number }}</td>
                                        <td>{{ $product->item_name }}</td>
                                        <td>{{ $product->item_description }}</td>
                                        <td>${{ number_format($product->unit_cost, 2) }}</td>
                                        <td>x{{ $product->quantity }}</td>
                                        <td>${{ number_format($product->line_total, 2) }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-sm btn-info">Edit</a>
                                            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger" />
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No Records Found</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforelse --}}
                                <a href="{{ route('products.create') }}?invoice_id={{ $invoice->id }}"
                                    target="_blank" class="btn btn-sm btn-info">Add Item</a>
                            </tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="font-size: medium">
                                    Subtotal:<br>
                                    <strong>Balance:</strong>
                                </td>
                                <td style="font-size: medium">
                                    ${{ number_format($invoice->amount, 2) }} <br>
                                    <strong>${{ number_format($invoice->balance, 2) }}</strong>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('invoices.update', $invoice->id) }}">
                {{ method_field('PUT') }}
                @csrf
            </form>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <button class="btn btn-info"
                            onclick="var ifr=document.getElementsByName('invoice_preview')[0]; ifr.src=ifr.src;">Refresh</button>
                        <a href="{{ route('invoices.show', $invoice->id) }}" target="_blank"
                            class="btn btn-md btn-info">Download</a>
                    </div>
                    <div class="card-body container-fluid">
                        <iframe name="invoice_preview" src="{{ url('/admin/invoice/mobile/preview/' . $invoice->id) }}"
                            width="100%" height="800">

                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
