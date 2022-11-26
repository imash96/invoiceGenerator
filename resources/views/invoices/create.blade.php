@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('invoices.store')}}">
    <div class="container">
        <h1 class="text-light">Create Invoice</h1>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Invoice Information</div>

                    <div class="card-body justify-content-center">
                            @csrf
                            Client:
                        <select class="form-control" id="client_id" name="client_id" <?php if (app('request')->input('client_id')) echo ' hidden'; ?>>
                            @forelse($clients as $client)
                               <option value="{{$client->id}}" <?php if (app('request')->input('client_id') == $client->id) echo ' selected="selected"'; ?>>{{$client->first_name}} {{$client->last_name}}</option>
                               @empty
                            @endforelse
                        </select>
                            Invoice Number:
                            <input type="text" name="invoice_number" value="0001" class="form-control"/>
                            Invoice Date:
                            <input type="date" name="invoice_date" value="{{ date('Y-m-d') }}" class="form-control"/>
                        <br>
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
