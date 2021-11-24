@extends('layouts/scholar_layout')
@section('title')
    VUOZ-Payments
@endsection
@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-info alert-with-icon" data-notify="container">
                        <i class="material-icons" data-notify="icon">notifications</i>

                        <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                        <span data-notify="message">
                            <p class="text-dark">
                                        <b>This page contains a checklist for your payments. Only accounts that are claimable and have SLP in their Ronin wallets are shown. You can easily copy the Ronin address for each account and see how much you need to transfer to it. The page is for informational purposes only.</b><br>
                                        Click the checkbox whenever you make a payment to add it to the second table. If you refresh the page these selections will be lost.<br>
                                        Keep in mind that claims can experience delays on Axie servers. You do not need to wait for a claim to be confirmed to make a payment.
                            </p>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="card ">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">payment</i>
                            </div>
                            <h4 class="card-title"><b>Pending Payments</b></h4>
                        </div>
                        <div class="card-body ">
                            <div class="row m-auto">
                                There are not records to display.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            demo.initCharts();
        });
    </script>
@endsection
