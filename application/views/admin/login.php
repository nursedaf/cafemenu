<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>Login Page </title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/login-3.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/lightbase.css" rel="stylesheet" type="text/css" />
    <link href="assets/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/darkbrand.css" rel="stylesheet" type="text/css" />
    <link href="assets/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(assets/bg-2.jpg);">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h2>Cafe Denizlim</h2>
                        </div>
                        <?php if ($this->session->flashdata('msg')) {?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('msg');?>
                                    </div>
                        <?php } ?>

                        <form class="form" action="<?php echo base_url('login'); ?>" method="POST">
                            <div class="form-group">
                                <input class="form-control h-auto text-white placeholder-white bg-dark-o-70 rounded-pill border-1 py-4 px-8 mb-5" type="text" placeholder="kullanıcı adı" name="ad" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <input class="form-control h-auto text-white placeholder-white bg-dark-o-70 rounded-pill border-1 py-4 px-8 mb-5" type="password" placeholder="password" name="password" />
                            </div>

                            <div class="form-group text-center mt-10">
                                <button type="submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-2">Giriş Yap
                                </button>
                            </div>

                        </form>

                    </div>

                    <!--end::Login Sign up form-->

                </div>
            </div>
        </div>
        <!--end::Login-->

    </div>

    <!--end::Main-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins.bundle.js"></script>
    <script src="assets/prismjs.bundle.js"></script>
    <script src="assets/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/login-general.js"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>