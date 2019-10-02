<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 07.09.2019 11:20
 */

use App\TestBall;
?>
@extends('layouts.main')
@section('pageTitle', 'Barcha ballar')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="{{Url('admin/index')}}" class="tip-bottom" data-original-title="Asosiy oynaga o`tish"><i class="icon-home"></i> Asosiy</a>
                <a href="{{Url('admin/balls')}}" class="current" data-original-title="Profil oynasiga o`tish">Ballar</a>
            </div>
            <h1>Barcha ballar</h1>
        </div>
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span10">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Barcha ballar</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>FIO</th>
                                    <th>Ball</th>
                                    <th>Level</th>
                                    <th>Ko`rish</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1; @endphp
                                @foreach ($tests as $value)
                                    <tr class="gradeX">
                                        <td>{{ $i }}</td>
                                        <td><a href="{{Url("admin/user/{$value->id}")}}" title="{{ $value->name }}">{{ $value->name }}</a> </td>
                                        <td>{{ TestBall::sum($value->id) }}</td>
                                        <td>{{ TestBall::level($value->id) }}</td>
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

