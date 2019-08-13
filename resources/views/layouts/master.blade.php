<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.head')
    <body>
        {{-- section holding the body --}}

        <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
                <!-- Container-fluid starts -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Authentication card start -->
                            <div class="login-card card-block auth-body m-auto">
                                <form class="md-float-material" action="{{route('signin')}}" method="POST">
                                     {{ csrf_field() }}
                                    <div class="text-center">
                                        <img src="{{URL::to('assets/images/logo.png')}}" alt="logo.png">
                                    </div>
                                    <div class="auth-box">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            
                                        <div class="row m-b-20">
                                            <div class="col-md-12">
                                                <h3 class="text-left txt-primary">Sign In</h3>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Your Email Address" name="email" aria-required="true">
                                            <span class="md-line"></span>
                                        </div>
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" aria-required="true">
                                            <span class="md-line"></span>
                                        </div>
                                        <div class="row m-t-25 text-left">
                                            <div class="col-sm-7 col-xs-12">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                        <span class="text-inverse">Remember me</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                                <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                            </div>
                                        </div>
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-9">
                                                <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                                <p class="text-inverse text-left"><b>Your Autentification Team</b></p>
                                            </div>
                                            <div class="col-3">
                                                <img src="{{URL::to('assets/images/auth/Logo-small-bottom.png')}}" alt="small-logo.png">
                                            </div>
                                        </div>
        
                                    </div>
                                </form>
                                <!-- end of form -->
                            </div>
                            <!-- Authentication card end -->
                        </div>
                        <!-- end of col-sm-12 -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of container-fluid -->
            </section>

               @include('layouts.footer')
    </body>
</html>
