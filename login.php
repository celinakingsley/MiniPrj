<!doctype html>
<html lang="en">
<body class="bg">
    <div class="main-content m-auto">
        <div class="page-content mt-auto">
            <!-- Row start -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="bg-primary">
                        <div class="text-primary text-center p-4 mt-2">

                            <h5 class="text-white font-size-20">Welcome Back !</h5>
                            <a>
                                <p class="text-white-50">Sign in to continue to Foox.</p>
                            </a>
                        </div>
                    </div>
                    <!-- Login card -->
                    <div class="card">
                        <div class="card-body  mt-2">
                            <form class="form-horizontal mt-4" id="login_form">
                                <span id="invalid_details" class="text-danger"></span>
                                <div class="form-group">
                                    <label for="email">Email Id</label>
                                    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control"
                                        type="email" placeholder="Email id" name="email_id" id="email_id"
                                        autocomplete="off">
                                    <span id="email-availability-status"></span>
                                </div>
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Enter password" autocomplete="off">


                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember"
                                                name="remember">
                                            <label class="custom-control-label" for="remember">Remember
                                                me</label>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" id="login_in">Log
                                            In</button>
                                    </div>
                                </div>
                                <div class="row m-auto">
                                    <a href="javascript:;" class="btn-link" id="forgot_password">Forgot password</a>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- Card End -->
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
<html>
