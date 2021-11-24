@extends('layouts/scholar_layout')
@section('title')
    VUOZ-Wallet
@endsection
@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons"></i>
                                </div>
                                <h4 class="card-title"><b>Tracker</b></h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Here you can track all your wallet assets value and status of the AXS and
                                            Farming.</p>
                                        <form method="post" action="#">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                          <i class="material-icons">account_balance_wallet</i>
                                                      </span>
                                                </div>
                                                <input type="text" class="form-control" name="wallet_address"
                                                       placeholder="ronin:xxxx...">
                                                <button type="submit" class="btn btn-rose btn-round btn-just-icon">
                                                    <i class="material-icons">save</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">account_balance_wallet</i>
                                </div>
                                <h4 class="card-title"><b>0.00 USD</b></h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <h3 class="text-center text-primary m-auto"></h3>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">waterfall_chart</i>
                                </div>
                                <p class="card-category"><b>My AXS Staking &nbsp;&nbsp;</b><br></p>
                                <h3 class="card-title text-danger">114%</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-danger">warning</i>
                                    <a href="#pablo">Get More Space...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">equalizer</i>
                                </div>
                                <p class="card-category"><b>My AXS-WETH Farming</b></p>
                                <h3 class="card-title text-success">429%</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Tracked from Google Analytics
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">stacked_bar_chart</i>
                                </div>
                                <p class="card-category"><b>My SLP-WETH Farming</b></p>
                                <h3 class="card-title text-primary">892%</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">area_chart</i>
                                </div>
                                <p class="card-category"><b>My SLP-WETH Farming</b></p>
                                <h3 class="card-title text-primary">892%</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="page-categories">
                            <ul class="nav nav-pills nav-pills-rose nav-pills-icons justify-content-center"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                                        <i class="material-icons">history_edu</i> Transaction
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                                        <i class="material-icons">history</i> ERC20 Transfer
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                                        <i class="material-icons">history_toggle_off</i> ERC721 Transfer
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content  tab-subcategories">
                                <div class="tab-pane active" id="link7">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><b>Transation History</b></h4>
                                            {{--                                            <p class="card-category">--}}
                                            {{--                                                More information here--}}
                                            {{--                                            </p>--}}
                                        </div>
                                        <div class="card-body text-center table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-primary">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td colspan="4">There are no records to display.</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="link8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><b>ERC20 Transfer</b></h4>
                                            {{--                                            <p class="card-category">--}}
                                            {{--                                                More information here--}}
                                            {{--                                            </p>--}}
                                        </div>
                                        <div class="card-body text-center table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-primary">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td colspan="4">There are no records to display.</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="link9">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><b>ERC721 Transfer</b></h4>
                                            {{--                                            <p class="card-category">--}}
                                            {{--                                                More information here--}}
                                            {{--                                            </p>--}}
                                        </div>
                                        <div class="card-body text-center table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-primary">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td colspan="4">There are no records to display.</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

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
