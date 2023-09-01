<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ config('app.name') }} | @yield('page_title')</title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">


        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ asset('oneUI') }}/css/oneui.min.css">
        @stack('styles')

        <style>
            .modal-backdrop.show {
                opacity: .5;
            }

            .overlay{
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                position: fixed;
                background-color: rgba(0,0,0,0.3);
                z-index: 99998;
            }

            .lds-ring {
                display: inline-block;
                width: 80px;
                height: 80px;
                z-index: 9999999;
                position: fixed;
                top: 50%;
                left: 50%;
            }
            .lds-ring div {
                box-sizing: border-box;
                display: block;
                position: absolute;
                width: 64px;
                height: 64px;
                margin: 8px;
                border: 8px solid #fff;
                border-radius: 50%;
                animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
                border-color: #fff transparent transparent transparent;
            }
            .lds-ring div:nth-child(1) {
                animation-delay: -0.45s;
            }
            .lds-ring div:nth-child(2) {
                animation-delay: -0.3s;
            }
            .lds-ring div:nth-child(3) {
                animation-delay: -0.15s;
            }
            @keyframes lds-ring {
                0% {
                transform: rotate(0deg);
                }
                100% {
                transform: rotate(360deg);
                }
            }

        </style>
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>

    <body>
        <div class="loading overlay" style="display: none">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
                <!-- Page Content -->
                <div class="hero-static">
                    <div class="content content-full font-size-sm text-muted text-center">
                        <strong>OneUI 4.8</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <script src="{{ asset('oneUI') }}/js/oneui.core.min.js"></script>
        <script src="{{ asset('oneUI') }}/js/oneui.app.min.js"></script>
        <script src="{{ asset('oneUI') }}/js/request.js"></script>
        <script>
            const loader = {
            show() {
                $('.loading').css('display','block');
            },
            hide() {
                let loading = $('.loading')
                loading.css('display','none')
            }
        };
        </script>

        {{-- <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/op_auth_signin.min.js"></script> --}}

        @stack('scripts')
    </body>
</html>
