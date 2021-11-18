@extends('layouts/scholar_layout')
@section('title')
    VUOZ-404
@endsection
@section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">Error Page</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../dashboard.html" class="nav-link">
                            <i class="material-icons">dashboard</i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="../pages/register.html" class="nav-link">
                            <i class="material-icons">person_add</i>
                            Register
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="../pages/login.html" class="nav-link">
                            <i class="material-icons">fingerprint</i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="../pages/lock.html" class="nav-link">
                            <i class="material-icons">lock_open</i>
                            Lock
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
        <div class="page-header error-page header-filter" style="background-image: url('../../assets/img/clint-mckoy.jpg')">
            <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
            <div class="content-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">404</h1>
                        <h2>Page not found :(</h2>
                        <h4>Ooooups! Looks like you got lost.</h4>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="https://creative-tim.com/presentation">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
