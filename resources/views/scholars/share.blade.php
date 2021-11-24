@extends('layouts/scholar_layout')
@section('title')
    VUOZ-Share
@endsection
@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <button class="btn btn-rose" data-toggle="modal" data-target="#addLinkModal">
                        <span class="btn-label">
                          <i class="material-icons">add_link</i>
                        </span>
                        Generate new sharable link
                    </button>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-header-info card-header">
                            <h3 class="m-0"><b>Generated shareable links</b></h3>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('scholars.includes.link_add_modal')
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            demo.initCharts();
        });
    </script>
@endsection
