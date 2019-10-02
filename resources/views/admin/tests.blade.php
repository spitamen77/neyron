<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 21.08.2019 14:44
 */

?>
@extends('layouts.main')
@section('pageTitle', 'Barcha testlar')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="{{Url('admin/index')}}" class="tip-bottom" data-original-title="Asosiy oynaga o`tish"><i class="icon-home"></i> Asosiy</a>
                <a href="{{Url('admin/tests')}}" class="current" data-original-title="Profil oynasiga o`tish">Testlar</a>
            </div>
            <h1>Barcha testlar</h1>
        </div>
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Barcha testlar</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>User</th>
                                    <th>Savol turi</th>
                                    <th>Op. turi</th>
                                    <th>Ishlatilgan raqam</th>
                                    <th>Op. soni</th>
                                    <th>Savol tezligi</th>
                                    <th>Xonalik sonlar</th>
                                    <th>User javobi</th>
                                    <th>Javob</th>
                                    <th>Natija</th>
                                    {{--<th>Qatnashgan sonlar</th>--}}
                                    <th>Ball</th>
                                    <th>Vaqti</th>
                                    <th>Ko`rish</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1; @endphp
                                @foreach ($tests as $value)
                                    <tr class="gradeX">
                                        <td>{{ $i }}</td>
                                        <td><a href="{{Url("admin/user/{$value->user_id}")}}" title="{{ $value->user->name }}">{{ $value->user->name }}</a> </td>
                                        <td>{{ $value->getTestType() }}</td>
                                        <td>{{ $value->getOperType() }}</td>
                                        <td>{{ $value->used_number }}</td>
                                        <td>{{ $value->operation_number }}</td>
                                        <td>{{ $value->question_speed }}</td>
                                        <td>{{ $value->min_number." / ".$value->max_number }}</td>
                                        <td>{{ $value->user_answer }}</td>
                                        <td>{{ $value->true_answer }}</td>
                                        <td>{{ $value->getNatija() }}</td>
                                        {{--<th>Qatnashgan sonlar</th>--}}
                                        <td>{{ $value->ball }}</td>
                                        <td>{{ date("Y-d-m H:i:s",$value->game_time) }}</td>
                                        <td><a href='{{Url("admin/test/{$value->test_id}")}}'> &nbsp;<span class="icon icon-eye-open" title="Ko`rish"> &nbsp;</span></a></td>
                                    </tr>
                                    @php $i++; @endphp
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

