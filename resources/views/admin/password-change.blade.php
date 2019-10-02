<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 21.08.2019 10:04
 */

?>
@extends('layouts.main')
@section('pageTitle', 'Parolni o`zgartirish')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="{{Url('admin/index')}}" class="tip-bottom" data-original-title="Asosiy oynaga o`tish"><i class="icon-home"></i> Asosiy</a>
                <a href="{{Url('admin/profile')}}" class="current" data-original-title="Profil oynasiga o`tish">Profil</a>
            </div>
            <h1>Parolni o`zgartirish</h1>
        </div>
        <div class="container-fluid">
            <h4 class="text-success">@isset($xabar)
                    @php echo $xabar @endphp
                @endisset </h4>
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Security validation</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{Url('admin/password-change')}}" name="password_validate" id="password_validate" novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Oldingi parol</label>
                                    <div class="controls">
                                        <input type="password" name="passwordold" id="pwd3"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Password</label>
                                    <div class="controls">
                                        <input type="password" name="pwd" id="pwd"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Confirm password</label>
                                    <div class="controls">
                                        <input type="password" name="pwd2" id="pwd2"/>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Saqlash" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

