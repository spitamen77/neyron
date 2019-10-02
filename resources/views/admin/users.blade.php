<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 21.08.2019 18:13
 */
?>
@extends('layouts.main')
@section('pageTitle', 'Barcha foydalanuvchilar')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="{{Url('admin/index')}}" class="tip-bottom" data-original-title="Asosiy oynaga o`tish"><i class="icon-home"></i> Asosiy</a>
                <a href="{{Url('admin/tests')}}" class="current" data-original-title="Profil oynasiga o`tish">Testlar</a>
            </div>
            <h1>Barcha foydalanuvchilar</h1>
        </div>
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Barcha foydalanuvchilar</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>FIO</th>
                                    <th>Telefon</th>
                                    <th>E-mail</th>
                                    <th>Yoshi</th>
                                    <th>Jinsi</th>
                                    <th>Viloyati</th>
                                    <th>Reg. sanasi</th>
                                    <th>Ko`rish</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1; @endphp
                                @foreach ($tests as $value)
                                    <tr class="gradeX">
                                        <td>{{ $i }}</td>
                                        <td><a href="{{Url("admin/user/{$value->id}")}}" title="{{ $value->name }}">{{ $value->name }}</a> </td>
                                        <td>{{ $value->phone }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->age }}</td>
                                        <td>{{ $value->getSex() }}</td>
                                        <td>{{ $value->viloyat->name_uz }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td><a href='{{Url("admin/user/{$value->id}")}}'> &nbsp;<span class="icon icon-eye-open" title="Ko`rish"> &nbsp;</span></a></td>
                                    </tr>
                                    @php $i++; @endphp
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="javascript:history.back()" class="btn btn-warning">Qaytish</a>
                </div>
            </div>
        </div>
    </div>
@endsection


