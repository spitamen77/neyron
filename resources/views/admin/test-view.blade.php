<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 21.08.2019 17:44
 */

?>

@extends('layouts.main')
@section('pageTitle', 'Test natijasi - №'.$test->test_id)
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="{{Url('admin/index')}}" class="tip-bottom" data-original-title="Asosiy oynaga o`tish"><i class="icon-home"></i> Asosiy</a>
                <a href="{{Url('admin/tests')}}" class="current" data-original-title="Profil oynasiga o`tish">Testlar</a>
            </div>
            <h1>@php echo 'Test natijasi - №'.$test->test_id @endphp</h1>
        </div>
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Test natijasi</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
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
                                    <th>Qatnashgan sonlar</th>
                                    <th>Ball</th>
                                    <th>Vaqti</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td><a href="{{Url("admin/user/{$test->user_id}")}}" title="{{ $test->user->name }}">{{ $test->user->name }}</a> </td>
                                    <td>{{ $test->getTestType() }}</td>
                                    <td>{{ $test->getOperType() }}</td>
                                    <td>{{ $test->used_number }}</td>
                                    <td>{{ $test->operation_number }}</td>
                                    <td>{{ $test->question_speed }}</td>
                                    <td>{{ $test->min_number." / ".$test->max_number }}</td>
                                    <td>{{ $test->user_answer }}</td>
                                    <td>{{ $test->true_answer }}</td>
                                    <td>{{ $test->getNatija() }}</td>
                                    <td>{{ $test->participated_numbers }}</td>
                                    <td>{{ $test->ball }}</td>
                                    <td>{{ date("Y-d-m H:i:s",$test->game_time) }}</td>
                                </tr>

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

