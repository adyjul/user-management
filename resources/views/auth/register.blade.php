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
                        <h3 class="block-title">Register</h3>

                    </div>
                    <div class="block-content">
                        <div class="p-sm-3 px-lg-4 py-lg-5">
                            <h1 class="h2 mb-1">Daftar Disini</h1>
                            <p class="text-muted">
                                Isi data dengan benar
                            </p>

                            <form class="js-validation-signin" action="{{ route('auth.register.post') }}" id="form_biodata" method="POST">
                                <div class="py-3">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control form-control-alt form-control-lg" id="nama" name="NAMA_USER" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Username</label>
                                        <input type="text" class="form-control form-control-alt form-control-lg" id="username" name="USERNAME" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input type="text" class="form-control form-control-alt form-control-lg" id="email" name="EMAIL" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">No Hp</label>
                                        <input type="text" class="form-control form-control-alt form-control-lg" id="no_hp" name="NO_HP" placeholder="No Hp">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">WA</label>
                                        <input type="text" class="form-control form-control-alt form-control-lg" id="wa" name="WA" placeholder="Wa">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">PIN</label>
                                        <input type="password" class="form-control form-control-alt form-control-lg" id="pin" name="PIN" placeholder="PIN">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Password</label>
                                        <input type="password" class="form-control form-control-alt form-control-lg" id="password" name="PASSWORD" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Konfirmasi Password</label>
                                        <input type="password" class="form-control form-control-alt form-control-lg" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-xl-5">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Daftar
                                        </button>
                                    </div>
                                    <a href="{{ route('auth.login.get') }}">Sudah Punya Akun ?</a>
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


@include('layouts.parts.sweetalert');

@push('scripts')
    <script>

         $(document).on('submit','#form_biodata',function(e){
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

