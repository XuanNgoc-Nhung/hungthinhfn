<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://hungthinhfn.com/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://hungthinhfn.com/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://hungthinhfn.com/bower_components/line-awesome-1.3.0/1.3.0/css/line-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css">
    <link rel="stylesheet" href="https://hungthinhfn.com/css/app.css">
    <link rel="stylesheet" href="https://hungthinhfn.com/static/css/main.7ec70620.css">
    <meta name="csrf-token" content="fswsuugcHWIOVRbsGzPdfuqYoXCUN2ccU3Pl3JQC">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital@1&amp;display=swap" rel="stylesheet">
    @yield('title')
</head>
<body style="height: auto; min-height: 100%;">
<div class="translate-tooltip-mtz translator-hidden">
    <div class="header">
        <div class="header-controls">
{{--            Translator--}}
        </div>
        <div class="header-controls">
            <span class="support"></span>
        </div>
        <div class="header-controls">
            <span class="settings"></span>
        </div>
    </div>
    <div class="translated-text">
        <div class="words"></div>
        <div class="sentences"></div>
    </div>
</div>
<span class="translate-button-mtz translator-hidden"></span>
@yield('content')
<!-- jQuery 3 -->
<script src="https://hungthinhfn.com/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://hungthinhfn.com/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="https://hungthinhfn.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://hungthinhfn.com/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

@yield('js_location')
<script>
    console.log('AHihi')
    $( document ).ready(function() {
        console.log( "ready!" );
    });
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items:1,
        dots:false,
        autoplay:true,
        autoplayTimeout:2500,
    })
</script>
</body>
</html>
