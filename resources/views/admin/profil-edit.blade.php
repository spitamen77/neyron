<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 20.08.2019 16:14
 */

?>
@extends('layouts.main')
@section('pageTitle', 'Profilni taxrirlash')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="{{Url('admin/index')}}" class="tip-bottom" data-original-title="Asosiy oynaga o`tish"><i class="icon-home"></i> Asosiy</a>
                <a href="{{Url('admin/profile')}}" class="current" data-original-title="Profil oynasiga o`tish">Profil</a>
            </div>
            <h1>Profil taxrirlash</h1>
        </div>
        <div class="container-fluid">
            <h4 class="text-success">@isset($xabar)
                    Barchasi saqlandi
                    @endisset </h4>
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Profil taxrirlash</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="{{Url('admin/profile-edit')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">FIO :</label>
                                    <div class="controls">
                                        <input type="text" name="name" class="span11" value="@php echo $user->name @endphp" placeholder="FIO" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">E-mail :</label>
                                    <div class="controls">
                                        <input type="email" name="email" value="@php echo $user->email @endphp" class="span11" placeholder="E-mail" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Yosh :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" value="@php echo $user->age @endphp" name="age" placeholder="Yosh"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Jinsi :</label>
                                    <div class="controls">
                                        <select name="sex" class="span11">
                                            <option value="Male" {{ ( $user->sex == 'Male') ? 'selected' : '' }}>Erkak</option>
                                            <option value="Female" {{ ( $user->sex == 'Female') ? 'selected' : '' }}>Ayol</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Viloyat :</label>
                                    <div class="controls">
                                        <select name="viloyat" class="span11">
                                            @foreach ($viloyat as $value)
                                                <option value="{{ $value->id }}" {{ ( $value->id == $user->viloyat_id) ? 'selected' : '' }}>
                                                    {{ $value->name_uz }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Rasm :</label>
                                    <div class="controls">
                                        <input type="file" name="image" class="span11" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
