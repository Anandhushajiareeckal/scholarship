@php
    use App\Models\linkk;
    use App\Models\settings;

    $link = linkk::first();
    $settings = settings::all();
@endphp
<!DOCTYPE html>
<html lang="en">
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <!-- /Added by HTTrack -->
    <head>
        {{-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="© 2021 LMSZAI. All Rights Reserved.">
        <meta name="robots" content="index, follow">
        <meta name="msapplication-TileImage" content="uploads_demo/setting/logo.png">
        <meta name="msapplication-TileColor" content="rgba(103, 20, 222,.55)">
        <meta name="theme-color" content="#754FFE">
        <meta name="description" content="LMSZai Learning management system">
        <meta name="keywords" content="Lmszai, Lms, Learning, Course">
        <meta property="og:type" content="Learning">
        <meta property="og:title" content="Home">
        <meta property="og:description" content="LMSZai Learning management system">
        <meta property="og:image" content="uploads_demo/setting/logo.png">
        <meta property="og:url" content="index.html">
        <meta property="og:site_name" content="LMSZAI">
        <meta name="twitter:card" content="Learning">
        <meta name="twitter:title" content="Home">
        <meta name="twitter:description" content="LMSZai Learning management system">
        <meta name="twitter:image" content="uploads_demo/setting/logo.png"> --}}
        <link rel="stylesheet" href="{{asset('addon/product/css/ecommerce-product.css')}}">
        <title>{{$settings[0]->option_value}}</title>
        <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('frontend/assets/fonts/feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/venobox.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/sweetalert2/sweetalert2.css')}}">
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
            href="{{asset('uploads_demo/setting/fav-icon.png')}}"
            sizes="72x72"
        >
        <link
            rel="apple-touch-icon-precomposed"
            type="image/x-icon"
            href="{{asset('uploads_demo/setting/fav-icon.png')}}"
            sizes="114x114"
        >
        <link
            rel="apple-touch-icon-precomposed"
            type="image/x-icon"
            href="{{asset('uploads_demo/setting/fav-icon.png')}}"
            sizes="144x144"
        >
        <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="uploads_demo/setting/fav-icon.png">
        <link rel="stylesheet" href="{{asset('frontend/assets/vendor/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/vendor/datatable/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/vendor/datatable/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="stylesheet" href="{{asset('frontend/assets/vendor/video-player/plyr.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/libs/toastr.js/2.1.4/toastr.min.css')}}">
        @livewireStyles
        
        <style>
   :root {
    --white-color: #fff;
        /* --theme-color: #5e3fd7; */
        --light-purple: rgba(117, 79, 254, 0.1);
        /* --heading-color: #040453; */
        --orange-color: #FC8068;
        --orange-deep: #FF3C16;
        /* --para-color: #52526C; */
        --gray-color: #767588;
        --gray-color2: #929292;
        --disable-color: #B5B4BD;
        --color-green: #45C881;
        --color-light-green: rgba(69, 200, 129, 0.22);
        --color-yellow: #FFC014;
        --light-bg: #F9F8F6;
        --page-bg: #F8F6F0;
        /* --plyr-color-main: #5e3fd7; */
        --border-color: rgba(0, 0, 0, 0.07);
        --border-color2: rgba(0, 0, 0, 0.09);
        /* --font-jost: 'Jost', sans-serif; */
        /* style by sohel */
        --title-color-1: #060667;
        --accordion-bg: #EFEDE5;
        --accordion-active-color: #6449C3;
        --footer-svg-fill: #F8F6F0;
        --input-placeholder-color: #52526C;
        --card-price-2: #F2F0E9;

     --theme-color: #5e3fd7;
            --plyr-color-main: #5e3fd7;
            /* --theme-color value set here*/
            --heading-color: #040453;
            --body-font-color: #52526C;
            --navbar-bg-color: #030060;
            --gradient-banner-bg: linear-gradient(130deg, #ad90c1 0%, rgb(3, 0, 84) 100%), linear-gradient(130deg, #09007b 0%, rgba(15, 0, 66, 0) 30%),
                linear-gradient(129.96deg, rgb(255, 47, 47) 10.43%, rgb(0, 4, 96) 92.78%), radial-gradient(100% 246.94% at 100% 0%, rgb(255, 255, 255) 0%, rgba(37, 0, 66, 0.8) 100%),
                linear-gradient(121.18deg, rgb(20, 0, 255) 0.45%, rgb(27, 0, 62) 100%), linear-gradient(154.03deg, rgb(206, 0, 0) 0%, rgb(255, 0, 61) 74.04%),
                linear-gradient(341.1deg, rgb(178, 91, 186) 7.52%, rgb(16, 0, 119) 77.98%), linear-gradient(222.34deg, rgb(169, 0, 0) 12.99%, rgb(0, 255, 224) 87.21%),
                linear-gradient(150.76deg, rgb(183, 213, 0) 15.35%, rgb(34, 0, 170) 89.57%);

            --gradient-overlay-bg: linear-gradient(180deg, rgba(0, 0, 61, 0.27) 0%, rgba(1, 1, 52, 0.9) 100%);

            --footer-gradient-bg: linear-gradient(130deg, #ad90c1 0%, rgb(3, 0, 84) 100%), linear-gradient(130deg, #09007b 0%, rgba(15, 0, 66, 0) 30%),
                linear-gradient(129.96deg, rgb(255, 47, 47) 10.43%, rgb(0, 4, 96) 92.78%), radial-gradient(100% 246.94% at 100% 0%, rgb(255, 255, 255) 0%, rgba(37, 0, 66, 0.8) 100%),
                linear-gradient(121.18deg, rgb(20, 0, 255) 0.45%, rgb(27, 0, 62) 100%), linear-gradient(154.03deg, rgb(206, 0, 0) 0%, rgb(255, 0, 61) 74.04%),
                linear-gradient(341.1deg, rgb(178, 91, 186) 7.52%, rgb(16, 0, 119) 77.98%), linear-gradient(222.34deg, rgb(169, 0, 0) 12.99%, rgb(0, 255, 224) 87.21%),
                linear-gradient(150.76deg, rgb(183, 213, 0) 15.35%, rgb(34, 0, 170) 89.57%);
}
        </style>
        <meta name="theme-color" content="#81008a">
        <link rel="apple-touch-icon" href="{{$link->base_url.'/'.$settings[9]->option_value}}">
        <link rel="manifest" href="manifest.json">
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
                <img  src="{{$link->base_url.'/'.$settings[7]->option_value}}" alt="img">
            </div>
        </div>
        <section class="menu-section-area ">
            
        </section>










        
@yield('body')















{{-- <footer class="footer-area footer-gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row footer-top-part section-p-t-b-90">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget footer-about">
                        <img src="{{asset('uploads_demo/setting/logo.png')}}" alt="Logo" >
                        
                        <p>Trivandrum Head Office Prabha Mohan Kumar 41-H PTP Nagar Trivandrum 695038</p>
                        <div class="footer-social mt-30">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="ant-design:facebook-filled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="ant-design:twitter-square-filled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="ant-design:linkedin-filled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span
                                            class="iconify"
                                            data-icon="fa-brands:pinterest-square"
                                            data-width="1em"
                                            data-height="1em"
                                        ></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-2 offset-lg-2">
                    <div class="footer-widget">
                        <h6 class="footer-widget-title">Company</h6>
                        <div class="footer-links d-flex">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Forum</a>
                                </li>
                                <li>
                                    <a href="#">FQA</a>
                                </li>
                                <li>
                                    <a href="#">Blogs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h6 class="footer-widget-title">Support</h6>
                        <div class="footer-links d-flex">
                            <ul>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                
                                <li>
                                    <a class="dropdown-item" href="#">Cookie Policy</a>
                                </li>
                                
                                <li>
                                    <a class="dropdown-item" href="#">Refund Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget footer-contact-info">
                        <h6 class="footer-widget-title">Contact Info</h6>
                        <div class="footer-links d-flex">
                            <ul>
                                
                                <li>
                                    <span class="iconify" data-icon="fluent-emoji-high-contrast:telephone-receiver"></span>
                                    <a href="tel:+91 87143 38904">+91 87143 38904</a>
                                </li>
                                <li>
                                    <span class="iconify" data-icon="ic:round-email"></span>
                                    <a href="">
                                        <span class="__cf_email__" >info@kpscpositive.in</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyright-wrapper">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="footer-payment">
                        <img src="{{asset('frontend/assets/img/payment-cards.png')}}" alt="payments">
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="copyright-text text-center">
                        <p class="text-white font-13">© 2023 Effects world. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pe-lg-0">
                    <div class="footer-bottom-nav">
                        <ul class="d-flex justify-content-end">
                            <li>
                                <a href="#">Instructor</a>
                            </li>
                            <li>
                                <a href="#">Become Instructor</a>
                            </li>
                            <li>
                                <a href="verify-certificate.html">Verify Certificate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
<button class="d-none pwa-install-btn bg-white position-fixed radius-4" id="installApp">
    <span class="iconify" data-icon="logos:pwa"></span>
</button>
<script data-cfasync="false" src="{{asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script>
    var deleteTitle = 'Sure! You want to delete?';
    var deleteText = 'You wont be able to revert this!';
    var deleteConfirmButton = 'Yes, Delete It!';
    var deleteSuccessText = 'Item has been deleted';
</script>
<script src="{{asset('frontend/assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/jquery/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/price_range_script.js')}}"></script>
<script src="{{asset('frontend/assets/js/feather.min.js')}}"></script>
<script src="{{asset('common/js/iconify.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/venobox.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/menu.js')}}"></script>
<script src="{{asset('frontend/assets/js/frontend-custom.js')}}"></script>
<script src="{{asset('admin/sweetalert2/sweetalert2.all.js')}}"></script>
<input type="hidden" id="base_url" value="https://lmszai.zainikthemes.com">
<input type="hidden" class="search_route" value="https://lmszai.zainikthemes.com/search-course-list">
<script src="{{asset('frontend/assets/js/custom/search-course.js')}}"></script>
<script>
    function getLanguage(){
        return {
            "sEmptyTable": "No data available in table",
            "sInfo": "Showing _START_ To _END_ Of _TOTAL_ Entries",
            "sInfoEmpty": "Showing 0 to 0 of 0 entries",
            "sInfoFiltered": "(filtered from _MAX_ total entries)",
            "sInfoPostFix": "",
            "sInfoThousands": ",",
            "sLengthMenu": "Show _MENU_ entries",
            "sLoadingRecords": "Loading...",
            "sProcessing": "Processing...",
            "sSearch": "Search:",
            "sZeroRecords": "No matching records found",
            "oPaginate": {
                "sFirst": "First",
                "sLast": "Last",
                "sNext": "Next",
                "sPrevious": "Previous"
            },
            "oAria": {
                "sSortAscending": ": activate to sort column ascending",
                "sSortDescending": ": activate to sort column descending"
            }
        };
    }
</script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/jszip/jszip.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/datatable/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/hero-text-effect.js')}}"></script>
<script src="{{asset('frontend/assets/js/course/addToCart.js')}}"></script>
<script src="{{asset('frontend/assets/js/course/addToWishlist.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom/booking.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/video-player/plyr.js')}}"></script>
<script>
        const zai_player = new Plyr('#player');
</script>
<script type="text/javascript" src="{{asset('frontend/assets/libs/toastr.js/2.1.4/toastr.min.js')}}"></script>
<script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-right","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>
<script src="{{asset('sw.js')}}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }

    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
     $('#installApp').removeClass('d-none');
        deferredPrompt = e;
    });

    const installApp = document.getElementById('installApp');
    installApp.addEventListener('click', async () => {
        if (deferredPrompt !== null) {
            deferredPrompt.prompt();
            const { outcome } = await deferredPrompt.userChoice;
            if (outcome === 'accepted') {
                deferredPrompt = null;
            }
        }
    });
</script>
@livewireScripts
</body>
</html>
