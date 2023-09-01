@extends('layouts.master_auth')

@section('page_title', 'Login')

@push('styles')
@endpush

@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <!-- Sign In Block -->
                <div class="block block-rounded block-themed mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Sign In</h3>
                        <div class="block-options">
                            <a class="btn-block-option font-size-sm" href="op_auth_reminder.html">Forgot Password?</a>
                            <a class="btn-block-option" href="{{ route('auth.register.get') }}" data-toggle="tooltip" data-placement="left" title="New Account">
                                <i class="fa fa-user-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="p-sm-3 px-lg-4 py-lg-5">
                            <h1 class="h2 mb-1">User Management</h1>
                            <p class="text-muted">
                                Welcome, please login.
                            </p>

                            <form class="js-validation-signin"  id="form-login" method="POST">
                                <div class="py-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alt form-control-lg" id="login-username" name="login-username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-alt form-control-lg" id="login-password" name="login-password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                            <label class="custom-control-label font-w400" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-xl-5">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
                <!-- END Sign In Block -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

        $(document).on('submit','#form-login',function(e){
                e.preventDefault();
                var form1 = $(this)[0];
                let formData = new FormData(form1);
                loader.show();
                postDataWithPromise(form1.action,formData)
                .then((result)=>{
                        Swal.fire({
                            icon: 'success',
                            title: result.message,
                        }).then(() => {
                           let url = "{{ route('auth.login.get') }}";
                           window.location = url;
                        })
                    })
                    .catch(err => {
                        Swal.fire({
                            icon: 'error',
                            title: err.message,
                        })

                    })
                    .finally(() => loader.hide())
            })

    </script>
@endpush

