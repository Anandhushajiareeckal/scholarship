<!DOCTYPE html>
<html lang="en">
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <!-- /Added by HTTrack -->
    <head>
    
        <title>LMSZAI - Login</title>
        <script src="../www.google.com/recaptcha/apicead.js?render=6Ley7kQmAAAAAJmdK2GE66qSAOzLe--PrytpmnrU"></script>
        <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link rel="{{asset('stylesheet" href="frontend/assets/fonts/feather/feather.css')}}">
        <link rel="{{asset('stylesheet" href="frontend/assets/css/animate.min.css')}}">
        <link rel="{{asset('stylesheet" href="frontend/assets/css/owl.carousel.min.css')}}">
        <link rel="{{asset('stylesheet" href="frontend/assets/css/owl.theme.default.min.css')}}">
        <link rel="{{asset('stylesheet" href="frontend/assets/css/venobox.min.css')}}">
        <link rel="{{asset('stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css')}}">
        <style>
     :root {
    --white-color: #fff;
    --light-purple: rgba(117, 79, 254, 0.1);
    --orange-color: #DB8B1A;
    --orange-deep: #AE5F33;
    --gray-color: #767588;
    --gray-color2: #929292;
    --disable-color: #B5B4BD;
    --color-green: #45C881;
    --color-light-green: rgba(69, 200, 129, 0.22);
    --color-yellow: #FFC014;
    --light-bg: #F9F8F6;
    --page-bg: #F8F6F0;
    --border-color: rgba(0, 0, 0, 0.07);
    --border-color2: rgba(0, 0, 0, 0.09);
    --body-font-family: 'Jost', sans-serif;
    
    --theme-color: #DB8B1A;
    --plyr-color-main: #DB8B1A;
    --heading-color: #212529;
    --body-font-color: #212529;
    --navbar-bg-color: #6E4E1F;
    --gradient-banner-bg: linear-gradient(130deg, #ad90c1 0%, rgb(110, 78, 31) 100%), linear-gradient(130deg, #1b1b1b 0%, rgba(15, 0, 66, 0) 30%),
        linear-gradient(129.96deg, rgb(110, 78, 31) 10.43%, rgb(110, 78, 31) 92.78%), radial-gradient(100% 246.94% at 100% 0%, rgb(255, 255, 255) 0%, rgba(110, 78, 31, 0.8) 100%),
        linear-gradient(121.18deg, rgb(110, 78, 31) 0.45%, rgb(110, 78, 31) 100%), linear-gradient(154.03deg, rgb(110, 78, 31) 0%, rgb(110, 78, 31) 74.04%),
        linear-gradient(341.1deg, rgb(174, 95, 51) 7.52%, rgb(110, 78, 31) 77.98%), linear-gradient(222.34deg, rgb(110, 78, 31) 12.99%, rgb(0, 255, 224) 87.21%),
        linear-gradient(150.76deg, rgb(183, 213, 0) 15.35%, rgb(110, 78, 31) 89.57%);
    
    --gradient-overlay-bg: linear-gradient(180deg, rgba(0, 0, 61, 0.27) 0%, rgba(110, 78, 31, 0.9) 100%);
    
    --footer-gradient-bg: linear-gradient(130deg, #ad90c1 0%, rgb(110, 78, 31) 100%), linear-gradient(130deg, #351300 0%, rgba(15, 0, 66, 0) 30%),
        linear-gradient(129.96deg, rgb(219, 139, 26) 10.43%, rgb(110, 78, 31) 92.78%), radial-gradient(100% 246.94% at 100% 0%, rgb(255, 255, 255) 0%, rgba(110, 78, 31, 0.8) 100%),
        linear-gradient(121.18deg, rgb(110, 78, 31) 0.45%, rgb(110, 78, 31) 100%), linear-gradient(154.03deg, rgb(110, 78, 31) 0%, rgb(110, 78, 31) 74.04%),
        linear-gradient(341.1deg, rgb(178, 91, 186) 7.52%, rgb(110, 78, 31) 77.98%), linear-gradient(222.34deg, rgb(110, 78, 31) 12.99%, rgb(0, 255, 224) 87.21%),
        linear-gradient(150.76deg, rgb(183, 213, 0) 15.35%, rgb(219, 139, 26) 89.57%);
}
        </style>
        <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/css/extra.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
        <link
            rel="icon"
            href="{{asset('uploads_demo/setting/fav-icon.png')}}"
            type="image/png"
            sizes="16x16"
        >
        <link rel="shortcut icon" href="{{asset('uploads_demo/setting/fav-icon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('uploads_demo/setting/fav-icon.png')}}">
        <link
            rel="apple-touch-icon-precomposed"
            type="image/x-icon"
            href="{{asset('frontend/assets/img/apple-icon-72x72.png')}}"
            sizes="72x72"
        >
        <link
            rel="apple-touch-icon-precomposed"
            type="image/x-icon"
            href="{{asset('frontend/assets/img/apple-icon-114x114.png')}}"
            sizes="114x114"
        >
        <link
            rel="apple-touch-icon-precomposed"
            type="image/x-icon"
            href="{{asset('frontend/assets/img/apple-icon-144x144.png')}}"
            sizes="144x144"
        >
        <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="frontend/assets/img/favicon-16x16.png">
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="../www.google.com/recaptcha/apicead.js?render=6Ley7kQmAAAAAJmdK2GE66qSAOzLe--PrytpmnrU"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-8QQBS5DT2J"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', "G-8QQBS5DT2J");
        </script>
    </head>
    <body class="direction-ltr">
        <div id="preloader">
            <div id="preloader_status">
                <img src="{{asset('uploads/setting/E5vAogRSNMEzM1Xyqqus.jpeg')}}" alt="img">
            </div>
        </div>
        <section class="sign-up-page p-0">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-5">
                        <div class="sign-up-left-content" style="background: #1b152b;">
                            <div class="sign-up-top-logo">
                                <a href="index.html">
                                    <img src="{{asset('uploads_demo/setting/logo.png')}}" alt="logo" style="width: 100%;">
                                </a>
                            </div>
                            <p>Discover world best online courses here. 24k online course is waiting for you</p>
                            <div class="sign-up-bottom-img">
                                <img src="{{asset('uploads_demo/home/hero-img.png')}}" alt="hero" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="sign-up-right-content bg-white">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h5 class="mb-1">Sign In</h5>
                                <p class="font-14 mb-30">New User ?
                                    <a href="/register" class="color-hover text-decoration-underline font-medium">Create an Account</a>
                                </p>
                                <div class="row mb-30">
                                    <div class="col-md-12">
                                        <label class="label-text-title color-heading font-medium font-16 mb-3">Email </label>
                                        <input  class="form-control email" id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="row mb-30">
                                    <div class="col-md-12">
                                        <label class="label-text-title color-heading font-medium font-16 mb-3">Password</label>
                                        <div class="form-group mb-0 position-relative">
                                            <input
                                                class="form-control password"
                                                type="password"
                                                name="password"
                                                value
                                                placeholder="*********"
                                            >
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            <span class="toggle cursor fas fa-eye pass-icon"></span>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <button type="submit" class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100">Sign In</button>
                                    </div>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="frontend/assets/vendor/jquery/jquery-3.6.0.min.js"></script>
        <script src="frontend/assets/vendor/jquery/popper.min.js"></script>
        <script src="frontend/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="frontend/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="frontend/assets/js/jquery-ui.min.js"></script>
        <script src="frontend/assets/js/waypoints.min.js"></script>
        <script src="frontend/assets/js/jquery.counterup.min.js"></script>
        <script src="frontend/assets/js/owl.carousel.min.js"></script>
        <script src="frontend/assets/js/price_range_script.js"></script>
        <script src="frontend/assets/js/feather.min.js"></script>
        <script src="common/js/iconify.min.js"></script>
        <script src="frontend/assets/js/venobox.min.js"></script>
        <script src="frontend/assets/js/menu.js"></script>
        <script>
        "use strict"
        $('#adminCredentialShow').on('click', function (){
            $('.email').val('admin@gmail.com');
            $('.password').val('123456');
        });

        $('#instructorCredentialShow').on('click', function (){
            $('.email').val('instructor@gmail.com');
            $('.password').val('123456');
        });

        $('#studentCredentialShow').on('click', function (){
            $('.email').val('student@gmail.com');
            $('.password').val('123456');
        });

        $('#affiliatorCredentialShow').on('click', function (){
            $('.email').val('affililator@gmail.com');
            $('.password').val('123456');
        });

        $('#organizationCredentialShow').on('click', function (){
            $('.email').val('organization@gmail.com');
            $('.password').val('123456');
        });
        </script>
        <script>
    var deleteTitle = 'Sure! You want to delete?';
    var deleteText = 'You wont be able to revert this!';
    var deleteConfirmButton = 'Yes, Delete It!';
    var deleteSuccessText = 'Item has been deleted';
        </script>
        <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-right","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>
        <script src="frontend/assets/js/frontend-custom.js"></script>
    </body>
</html>
