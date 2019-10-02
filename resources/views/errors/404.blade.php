<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 21.08.2019 11:33
 */
?>
        <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <title>404 - Sahifa topilmadi</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/back/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/back/css/font-awesome.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
{{--<div id="loginbox">--}}
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Error</a> </div>
        <h1>404 - Sahifa topilmadi</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>404 - Sahifa topilmadi</h5>
                    </div>
                    <div class="widget-content">
                        <div class="error_ex">
                            <h1>404</h1>
                            <h3>Bunday sahifa mavjud emas.</h3>
                            <p>Biz siz qidirgan sahifani topa olmadik.</p>
                            <a class="btn btn-warning btn-big"  href="{{Url('admin/index')}}">Asosiy sahifaga qaytish</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--@endsection--}}
{{--</div>--}}

<script src="{{asset('js/back/jquery.min.js')}}"></script>
<script src="{{asset('js/back/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/back/bootstrap.min.js')}}"></script>
<script src="{{asset('js/back/maruti.js')}}"></script>
</body>

</html>