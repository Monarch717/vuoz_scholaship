@extends('layouts.auth_layout')

@section('title')
    VUOZ - LogIn
@endsection
@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
            <div class="card card-signup">
                <h2 class="card-title text-center">Register</h2>
                @if(session()->has('errors'))
                    <div class="alert alert-danger w-75 m-auto">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                        <span><b> Error - </b> {{ session('errors')->first('msg') }}</span>
                    </div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 ml-auto d-none d-md-block">
                            <img src="{{asset('assets/img/logo/VUOZ_Main Logo_Primary_Colour_RGB.png')}}" alt="logo"
                                 class="" width="300"/>
                        </div>
                        <div class="col-md-5 mr-auto">
                            <div class="social text-center">
                                <button class="btn btn-just-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button class="btn btn-just-icon btn-round btn-dribbble">
                                    <i class="fa fa-google-plus"></i>
                                </button>
                                <button class="btn btn-just-icon btn-round btn-facebook">
                                    <i class="fa fa-facebook"> </i>
                                </button>
                                <h4 class="mt-3"> or be classical </h4>
                            </div>
                            <form class="form" method="post" action="{{route('scholar.register')}}"
                                  id="RegisterValidation">
                                @csrf
                                <div class="form-group has-default">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="material-icons">face</i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="username"
                                               placeholder="User Name..." required="true">
                                    </div>
                                </div>
                                <div class="form-group has-default">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="material-icons">mail</i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="email" placeholder="Email..."
                                               required="true">
                                    </div>
                                </div>
                                <div class="form-group has-default">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="material-icons">lock_outline</i>
                                            </span>
                                        </div>
                                        <input type="password" placeholder="Password..." name="password"
                                               class="form-control" required="true">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked="">
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        I agree to the
                                        <a href="#">terms and conditions</a>.
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-round mt-4">Register</button>
                                </div>
                            </form>
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
            md.checkFullPageBackgroundImage();
            setTimeout(function () {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
            // setFormValidation('#RegisterValidation');
        });
    </script>
@endsection
