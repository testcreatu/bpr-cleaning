<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page Title -->
    <title>BPR Cleaning</title>


    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/css/responsive.css')}}">


     <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{url('public/owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/owl/owl.theme.default.min.css')}}">


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Jquery 1.9.1 -->
    <script type="text/javascript" src="{{url('public/js/jquery-1.9.1.min.js')}}"></script>

    <script>
    $(document).ready(function () {
        $('.nav-tabs > li a[title]').tooltip();
        
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

            var target = $(e.target);
            
            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });
        $(".prev-step").click(function (e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });
</script>

</head>

<body>

<div>
	@include('header.header')
</div>

<div style="min-height: 50vh">
	@yield('content')
</div>

<div>
	@include('footer.footer')
</div>
	
</body>

<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>


<!-- owl carousel -->
<script src="{{url('public/owl/jquery.min.js')}}"></script>
<script src="{{url('public/owl/owl.carousel.min.js')}}"></script>


<!-- Global JS -->
<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>


</html>