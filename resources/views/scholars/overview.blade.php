@extends('layouts/scholar_layout')
@section('title')
    VUOZ-Overview
@endsection
@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-header card-header-warning card-header-icon">--}}
{{--                                <div class="card-icon">--}}
{{--                                    <i class="material-icons">weekend</i>--}}
{{--                                </div>--}}
{{--                                <p class="card-category">Bookings</p>--}}
{{--                                <h3 class="card-title">184</h3>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="material-icons text-danger">warning</i>--}}
{{--                                    <a href="#pablo">Get More Space...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-header card-header-rose card-header-icon">--}}
{{--                                <div class="card-icon">--}}
{{--                                    <i class="material-icons">equalizer</i>--}}
{{--                                </div>--}}
{{--                                <p class="card-category">Website Visits</p>--}}
{{--                                <h3 class="card-title">75.521</h3>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="material-icons">local_offer</i> Tracked from Google Analytics--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-header card-header-success card-header-icon">--}}
{{--                                <div class="card-icon">--}}
{{--                                    <i class="material-icons">store</i>--}}
{{--                                </div>--}}
{{--                                <p class="card-category">Revenue</p>--}}
{{--                                <h3 class="card-title">$34,245</h3>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="material-icons">date_range</i> Last 24 Hours--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                        <div class="card card-stats">--}}
{{--                            <div class="card-header card-header-info card-header-icon">--}}
{{--                                <div class="card-icon">--}}
{{--                                    <i class="fa fa-twitter"></i>--}}
{{--                                </div>--}}
{{--                                <p class="card-category">Followers</p>--}}
{{--                                <h3 class="card-title">+245</h3>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <div class="stats">--}}
{{--                                    <i class="material-icons">update</i> Just Updated--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons"></i>
                                </div>
                                <h4 class="card-title"><b>Forecast</b></h4>
                            </div>
                            <div class="card-body ">
                                <p>Today so far:</p>
                                <p><b>0 SLP</b></p>
                                <p><small>~0.00 USD</small></p>
                                <p>Expected at the end of the day:</p>
                                <p><b>0 SLP</b></p>
                                <p><small>~0.00 USD</small></p>
                                <p>Expecting for 30 days:</p>
                                <p><b>0 SLP</b></p>
                                <p><small>~0.00 USD</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card ">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">phone_callback</i>
                                </div>
                                <h4 class="card-title"><b>People that did not make the quota yesterday - 75 SLP</b>
                                </h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                There are no records to display
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-primary">TODAY'S / YESTERDAY'S SLP</p>
                                                <p>We run a daily job to gather data at 12 AM GMT (8 AM PHT). Any SLP
                                                    that is earned and then withdrawn between two daily snapshots is not
                                                    recorded and will not be visible. If your account is new and shows
                                                    0, it means that we do not have historical data yet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-rose">
                                <div class="card-icon">
                                    <i class="material-icons">timeline</i>
                                </div>
                                <h4 class="card-title"><b>Daily SLP</b></h4>
                            </div>
                            <div class="card-body">
                                <div id="colouredBarsChart" class="ct-chart"></div>
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
            /* Add a basic data series with six labels and values */
            var data = {
                labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11',],
                series: [
                    {
                        data: [1, 2, 3, 5, 8, 13,15, 20, 23, 25, 28]
                    }
                ]
            };

            /* Set some base options (settings will override the default settings in Chartist.js *see default settings*). We are adding a basic label interpolation function for the xAxis labels. */
            var options = {
                axisX: {
                    labelInterpolationFnc: function(value) {
                        return 'Day ' + value;
                    }
                }
            };

            /* Now we can specify multiple responsive settings that will override the base settings based on order and if the media queries match. In this example we are changing the visibility of dots and lines as well as use different label interpolations for space reasons. */
            var responsiveOptions = [
                ['screen and (min-width: 641px) and (max-width: 1024px)', {
                    showPoint: false,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return 'Day ' + value;
                        }
                    }
                }],
                ['screen and (max-width: 640px)', {
                    showLine: false,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return 'D' + value;
                        }
                    }
                }]
            ];

            /* Initialize the chart with the above settings */
            new Chartist.Line('#colouredBarsChart', data, options, responsiveOptions);
        });
    </script>
@endsection
