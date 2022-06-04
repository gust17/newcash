<!DOCTYPE html>
<html lang="en">

<head>
    <title>NFT</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/cliente/default/assets/fonts/font-awsome-pro/css/pro.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cliente/default/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cliente/default/assets/fonts/fontawesome.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/cliente/default/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cliente/default/assets/css/customizer.css') }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/cliente/default/assets/css/plugins/animate.min.css') }}">


</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">

            <img class="img-fluid p-4 logo logo-lg" src="{{ asset('assets/NFTCASH-BRANCO.png') }}" alt="">
        </div>
        <div class="pcm-toolbar">
            <a href="#" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!-- <i data-feather="menu"></i> -->
            </a>
            <a href="#" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar font-decorative text-lowercase">
        <div class="navbar-wrapper menuTour">
            <div class="m-header">
                <a href="#" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img class="img-fluid p-4 logo logo-lg" src="{{ asset('') }}assets/NFTCASH-BRANCO.png" alt="">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item">
                        <a href="#" class="pc-link ">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/9.png" alt="">
                            </span>
                            <span class="pc-mtext">Menu</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="javascript:void(0);" class="pc-link">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/17.png" alt="">
                            </span>
                            <span class="pc-mtext">meus planos</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#">Comprar Planos</a></li>
                            <li class="pc-item"><a class="pc-link" href="#">Ativos</a></li>
                            <li class="pc-item"><a class="pc-link" href="#">Expirados</a></li>
                        </ul>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Rede</label>
                        <span>---</span>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="javascript:void(0);" class="pc-link">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/12.png" alt="">
                            </span>
                            <span class="pc-mtext">Indicados </span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="">Ativos</a></li>
                            <li class="pc-item"><a class="pc-link" href="">Pendentes</a></li>
                            <li class="pc-item"><a class="pc-link" href="">Indicados Rede</a></li>
                        </ul>
                    </li>
                    <li class="pc-item">
                        <a href="" class="pc-link ">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/13.png" alt="">
                            </span>
                            <span class="pc-mtext">rede relatorio</span>
                        </a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Financeiro</label>
                        <span>---</span>
                    </li>
                    <li class="pc-item">
                        <a href="faturas" class="pc-link ">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/14.png" alt="">
                            </span>
                            <span class="pc-mtext">Fatura</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="javascript:void(0);" class="pc-link ">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/15.png" alt="">
                            </span>
                            <span class="pc-mtext">Extratos</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="">Geral</a></li>
                            <li class="pc-item"><a class="pc-link" href="">Rendimento</a></li>
                            <li class="pc-item"><a class="pc-link" href="">rede</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="javascript:void(0);" class="pc-link ">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/16.png" alt="">
                            </span>
                            <span class="pc-mtext">Saques</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="">Saques Relatorio</a></li>
                            <li class="pc-item"><a class="pc-link" href="">Saque rede</a></li>
                        </ul>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>'menu_conta'</label>
                        <span>----</span>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="javascript:void(0);" class="pc-link ">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/10.png" alt="">
                            </span>
                            <span class="pc-mtext">'menu_perfil'</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="">'menu_perfil_dados</a></li>
                            <li class="pc-item"><a class="pc-link" href="">'menu_perfil_senha</a></li>
                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="javascript:void(0);" class="pc-link ">
                            <span class="pc-micon">
                                <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/18.png" alt="">
                            </span>
                            <span class="pc-mtext">'menu_contas'</span>
                            <span class="pc-arrow">
                                <i data-feather="chevron-right"></i>
                            </span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="">'menu_contas_conta_bancaria'</a></li>
                            <li class="pc-item"><a class="pc-link" href="">'menu_contas_bankon'</a></li>
                            <li class="pc-item"><a class="pc-link" href="">'menu_contas_pix'</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="pc-header ">
        <div class="header-wrapper">
            <div class="ml-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <a href="" class="dropdown-item">
                                <img src="{{ asset('assets/pages/img/flags/portuguese-br.png') }}" alt=""> Português
                                -
                                BR
                            </a>
                            <a href="" class="dropdown-item">
                                <img src="{{ asset('assets/pages/img/flags/english.png') }}" alt=""> English
                            </a>
                            <a href="" class="dropdown-item">
                                <img src="" alt=""> Spanish
                            </a>
                        </div>
                    </li>
                    <li class="pc-h-item">
                        <a class="pc-head-link mr-0 notificacaoTour" href="">
                            <img class="img-fluid" src="{{ asset('') }}assets/bell.png" width="24" alt="">

                        </a>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img class="img-fluid" src="{{ asset('') }}assets/icons_plans/10.png" alt=""
                                width="50">
                            <span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="user-desc">Perfil</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <div class=" dropdown-header">
                                <h6 class="text-overflow m-0">'bem_vindo'</h6>
                            </div>
                            <a href="" class="dropdown-item">
                                <i data-feather="user"></i>
                                <span>'dropdown_dados_pessoais'</span>
                            </a>
                            <a href="" class="dropdown-item">
                                <i data-feather="lock"></i>
                                <span>'dropdown_trocar_senha'</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();" class="dropdown-item">
                                    <i data-feather="power"></i>
                                    <span>Sair</span>
                                </a>

                            </form>

                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <!-- [ breadcrumb ] start -->
        <div class="row">
            <div class="col-md-12 text-right">
                <small
                    class="p-1 pr-3 pl-3 text-color-nft font-family-decorative">'proximo_rendimento_ser_pago'</small>
                <div id="proximo_rendimento"></div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="{{ asset('') }}assets/cliente/default/assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="{{ asset('') }}assets/cliente/default/assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="{{ asset('') }}assets/cliente/default/assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="{{ asset('') }}assets/cliente/default/assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="{{ asset('') }}assets/cliente/default/assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <script>
        var baseURL = '{{ asset('') }}';
    </script>
    <!-- VAR -->

    <!-- Required Js -->
    <script src="{{ asset('') }}assets/cliente/default/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('') }}assets/cliente/default/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/cliente/default/assets/js/plugins/feather.min.js"></script>
    <script src="{{ asset('') }}assets/cliente/default/assets/js/pcoded.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('') }}assets/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="{{ asset('') }}assets/pages/js/geral.js"></script>
    <!-- custom-chart js -->
    <?php
    if (isset($jsLoader)) {
        foreach ($jsLoader as $file) {
            $url = is_file($file) ? base_url($file) : $file;
            echo '<script src="' . $url . '"></script>' . PHP_EOL;
        }
    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 350,
                modifier: 1,
                slideShadows: true
            },
            pagination: {
                el: ".swiper-pagination"
            }
        });
    </script>
</body>

</html>
