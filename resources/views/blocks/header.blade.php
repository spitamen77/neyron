<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 19.08.2019 9:33
 */
use Illuminate\Support\Facades\Auth;

if(!Auth::check()){
    header("Location: ".Url('admin'));
    die();
}
?>

<!--Header-part-->
<div id="header">
    <a href="dashboard.html">
        <img style="width: 220px;border-radius:10px;" src="{{asset('image/back/demo/demo-image3.jpg')}}"/>
    </a>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>
                <span class="text">@php echo Auth::user()->name; @endphp</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{Url('admin/profile')}}"><i class="icon-user"></i> Profil</a></li>
                <li class="divider"></li>
                <li class=""><a href="{{Url('admin/password-change')}}"><i class="icon icon-cog"></i> <span class="text">Parol o`zgartirish</span></a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> Xabarlar</a></li>
                <li class="divider"></li>
                <li><a href="{{URL('admin/logout')}}"><i class="icon-key"></i> Chiqish</a></li>
            </ul>
        </li>
        {{--<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>--}}
            {{--<ul class="dropdown-menu">--}}
                {{--<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>--}}
        <li class=""><a title="" href="{{URL('admin/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Chiqish</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->

@extends('blocks.left')