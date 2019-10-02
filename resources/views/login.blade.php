<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 19.08.2019 10:19
 */
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <title>Anzan Admin panel</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/back/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back/matrix-login.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/back/css/font-awesome.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox">
    <form id="loginform" class="form-vertical" method="post" action="{{route('login')}}">
        @csrf
        <div class="control-group normal_text"> <h3><img src="{{asset('image/back/logo.png')}}" alt="Logo" /></h3></div>
        <div class="control-group normal_text"> <h4>@php if (isset($xabar)) echo $xabar @endphp</h4></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="phone" type="text" placeholder="Phone" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="password" type="password" placeholder="Password" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
            <span class="pull-right">
                <button type="submit" class="btn btn-success"> Login</button>
            </span>
        </div>
    </form>
    <form id="recoverform" action="#" method="post" class="form-vertical">
        @csrf
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><button type="submit" name="reset" class="btn btn-info" >Reecover</button></span>
        </div>
    </form>
</div>

<script src="{{asset('js/back/jquery.min.js')}}"></script>
<script src="{{asset('js/back/matrix.login.js')}}"></script>
</body>

</html>