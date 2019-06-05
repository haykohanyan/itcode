<!DOCTYPE html>
<html lang="en">
<head>
    <title>It Code Ուսումնական կենտրոն</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="theme-color" content="#db5945">
    <script type="application/x-javascript">

        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/JiSlider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/portfolio.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<div class="loader"></div>
<header>
    <div class="container header_container">
        <nav class=" navbar navbar-expand-lg navbar-light clear_fix bg-light fixed-top" style="height: 115px;">
            <div class="logo" >
                <a class="navbar-brand logo-wrap" href="{{route('main.index')}}">
                    <img class="logo-img" src="{{asset('images/logo.png')}}" alt="logo">
                </a>
            </div>
            <a  href="{{route('main.index')}}" style="color: black">
                <div class="programming_training_center">
                    <p>ԾՐԱԳՐԱՎՈՐՄԱՆ</p>
                    <p>ՈՒՍՈՒՄՆԱԿԱՆ</p>
                    <p>ԿԵՆՏՐՈՆ</p>
                </div>
            </a>


            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nb" id="navbarSupportedContent" >
                <ul class="navbar-nav mx-auto text-center" style="margin-top: 0;">
                    <li class="nav-item   mr-lg-3">
                        <a class="nav-link  pad1" href="{{route('main.index')}}">
                            <span class="sr-only">(current)</span>
                            <span class="disp1">  ԳԼԽԱՎՈՐ</span>
                            <button class="wbp disp2"  style="font-weight: 600!important;">
                                ԳԼԽԱՎՈՐ
                            </button></a>
                        </a>
                    </li>
                    <li class="nav-item  mr-lg-3 ">
                        <a class="nav-link  pad2" href="{{route('main.about')}}">
                            <span class="disp1"> ՄԵՐ ՄԱՍԻՆ</span>
                            <button class="wbp disp2"  style="font-weight: 600!important;">
                                ՄԵՐ ՄԱՍԻՆ
                            </button></a>
                        </a>
                    </li>
                    <li class="nav-item  mr-lg-3 ">
                        <a class="nav-link pad3" href="{{route('main.courses')}}">
                            <span class="disp1">ԴԱՍԸՆԹԱՑՆԵՐ</span>
                            <button class="wbp disp2"  style="font-weight: 600!important;">
                                ԴԱՍԸՆԹԱՑՆԵՐ
                            </button></a>
                        </a>
                    </li>
                    <li class="nav-item  mr-lg-3 ">
                        <a class="nav-link pad5" href="{{route('main.portfolio')}}">
                            <span  class="disp1">ԱՇԽԱՏԱՆՔՆԵՐ</span>
                            <button class="wbp disp2"  style="font-weight: 600!important;">
                                ԱՇԽԱՏԱՆՔՆԵՐ
                            </button></a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pad4" href="{{route('main.contact')}}">
                            <span class="disp1"> ՀԵՏԱԴԱՐՁ ԿԱՊ</span>
                            <button class="wbp disp2"  style="font-weight: 600!important;">
                                ՀԵՏԱԴԱՐՁ ԿԱՊ
                            </button></a>
                    </li>
                    <li class="nav-item bt_1">
                        <a href="{{route('main.information')}}" class="change">
                            <button class="why_become_programmer"  style="font-weight: 600!important;">
                                ԻՆՉՈՒ՞ ԴԱՌՆԱԼ ԾՐԱԳՐԱՎՈՐՈՂ
                            </button>
                        </a>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
</header>
@yield('content')





<!-- js-scripts -->

<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{'js/JiSlider.js'}}"></script>
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script src="{{asset('js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched

                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            },
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>
<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
<script src="{{asset('js/move-top.js')}}"></script>
<script  src="{{asset('js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<script src="{{asset('js/index.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>