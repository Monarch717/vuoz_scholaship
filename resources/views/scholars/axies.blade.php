@extends('layouts/scholar_layout')
@section('title')
    VUOZ-Axies
@endsection
@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">search</i>
                            </div>
                            <h4 class="card-title"><b>Filters</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group">
                                        <label for="">SEARCH</label>

                                        <select class="form-control selectpicker" data-style="btn btn-link"
                                                id="exampleFormControlSelect1">
                                            <option>All</option>
                                            <option>Egg</option>
                                            <option>Beast</option>
                                            <option>Plant</option>
                                            <option>Bug</option>
                                            <option>Mech</option>
                                            <option>Dust</option>
                                            <option>Aquatic</option>
                                            <option>Bird</option>
                                            <option>Reptile</option>
                                            <option>Dawn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">FILTER BY CLASS</label>
                                                <select class="form-control selectpicker" data-style="btn btn-link"
                                                        id="exampleFormControlSelect6">
                                                    <option>All</option>
                                                    <option>Egg</option>
                                                    <option>Beast</option>
                                                    <option>Plant</option>
                                                    <option>Bug</option>
                                                    <option>Mech</option>
                                                    <option>Dust</option>
                                                    <option>Aquatic</option>
                                                    <option>Bird</option>
                                                    <option>Reptile</option>
                                                    <option>Dawn</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">FILTER BY OWNER</label>
                                                <select class="form-control selectpicker" data-style="btn btn-link"
                                                        id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">BREEDS</label>
                                                <select class="form-control selectpicker" data-style="btn btn-link"
                                                        id="exampleFormControlSelect2">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">PARTS</label>
                                            <select class="form-control selectpicker" data-style="btn btn-link"
                                                    id="exampleFormControlSelect3">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">GENETIC R1</label>
                                            <select class="form-control selectpicker" data-style="btn btn-link"
                                                    id="exampleFormControlSelect4">
                                                <option>ALL</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
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
                                    <i class="material-icons">add_chart</i>
                                </div>
                                <h4 class="card-title"><b>Total 0</b></h4>
                            </div>
                            <div class="card-body">
                                <h5 class="text-center">There is no result for display</h5>
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
