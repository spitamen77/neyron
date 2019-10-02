<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 17.08.2019 9:49
 */
?>
@extends('layouts.main')
@section('pageTitle', 'Asosiy sahifa')
@section('content')


<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{Url('admin/index')}}" title="Asosiy oynaga o`tish" class="tip-bottom"><i class="icon-home"></i> Asosiy</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="{{Url('admin/index')}}"> <i class="icon-dashboard"></i> Bosh oyna </a> </li>
                <li class="bg_lg "> <a href="{{Url('admin/profile')}}"> <i class="icon-cog"></i> Profil</a> </li>
                <li class="bg_ly"> <a href="{{Url('admin/users')}}"> <i class="icon-user"></i><span class="label label-success">101</span> Foydalanuvchilar </a> </li>
                <li class="bg_lo"> <a href="{{Url('admin/tests')}}"> <i class="icon-signal"></i> Testlar</a> </li>
                <li class="bg_ls"> <a href="{{Url('admin/balls')}}"> <i class="icon-tint"></i> Ball</a> </li>
                <li class="bg_lr"> <a href="{{Url('admin/logout')}}"> <i class="icon-share-alt"></i>Tizimdan chiqish</a> </li>

            </ul>
        </div>
        <!--End-Action boxes-->

        <!--Chart-box-->

    </div>
</div>

<!--end-main-container-part-->
@endsection