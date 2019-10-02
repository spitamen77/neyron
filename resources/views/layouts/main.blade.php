<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 19.08.2019 9:35
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('pageTitle')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/back/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/uniform.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/back/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('blocks.header')

@yield('content')

@include('blocks.footer')

{{--<script src="{{asset('js/back/excanvas.min.js')}}"></script>--}}
<script src="{{asset('js/back/jquery.min.js')}}"></script>
<script src="{{asset('js/back/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/back/bootstrap.min.js')}}"></script>
<script src="{{asset('js/back/jquery.uniform.js')}}"></script>
{{--<script src="{{asset('js/back/jquery.flot.min.js')}}"></script>--}}
{{--<script src="{{asset('js/back/jquery.flot.resize.min.js')}}"></script>--}}
{{--<script src="{{asset('js/back/jquery.peity.min.js')}}"></script>--}}
{{--<script src="{{asset('js/back/fullcalendar.min.js')}}"></script>--}}
{{--<script src="{{asset('js/back/matrix.dashboard.js')}}"></script>--}}
{{--<script src="{{asset('js/back/jquery.gritter.min.js')}}"></script>--}}
{{--<script src="{{asset('js/back/matrix.interface.js')}}"></script>--}}
{{--<script src="{{asset('js/back/matrix.chat.js')}}"></script>--}}
<script src="{{asset('js/back/select2.min.js')}}"></script>
<script src="{{asset('js/back/jquery.validate.js')}}"></script>
<script src="{{asset('js/back/matrix.js')}}"></script>
<script src="{{asset('js/back/matrix.form_validation.js')}}"></script>
<script src="{{asset('js/back/jquery.wizard.js')}}"></script>
<script src="{{asset('js/back/matrix.popover.js')}}"></script>
<script src="{{asset('js/back/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/back/matrix.tables.js')}}"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>
</html>

