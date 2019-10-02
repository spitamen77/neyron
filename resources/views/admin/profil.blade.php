<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 20.08.2019 14:42
 */
use Illuminate\Support\Facades\Auth;
?>
@extends('layouts.main')
@section('pageTitle', 'Profil oynasi')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="{{Url('admin/index')}}" class="tip-bottom" data-original-title="Asosiy oynaga o`tish"><i class="icon-home"></i> Asosiy</a>
            <a class="current">Profil</a>
        </div>
        <h1>Profil oynasi</h1>
    </div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5><a href="{{Url('admin/profile-edit')}}">Profilni taxrirlash <i class="icon-pencil"></i> </a> </h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Rendering engine</th>--}}
                            {{--<th>Browser</th>--}}
                            {{--<th>Platform(s)</th>--}}
                            {{--<th>Engine version</th>--}}
                            {{--<th>CSS grade</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Ismi: </td>
                            <td>@php echo $user->name @endphp</td>

                        </tr>
                        <tr class="even gradeC">
                            <td>Telefon</td>
                            <td>@php echo $user->phone @endphp</td>

                        </tr>
                        <tr class="odd gradeA">
                            <td>E-mail</td>
                            <td>@php echo $user->email @endphp</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Yoshi</td>
                            <td>@php echo $user->age @endphp</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Viloyat</td>
                            <td>@php echo $user->viloyat->name_uz @endphp</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Rasm</td>
                            <td><img src="@php echo $user->image @endphp" style="width: 200px; border-radius: 5px"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection