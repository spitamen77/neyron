<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 20.08.2019 9:58
 */


use Illuminate\Support\Facades\Route;

$routeName = Route::current()->uri;

?>
<!--sidebar-menu-->
<div id="sidebar"><a href="{{Url('admin/index')}}" class="visible-phone"><i class="icon icon-home"></i> Bosh oina</a>
    <ul>
        <li class="{{($routeName=="admin/index")? 'active':''}}">
            <a href="{{Url('admin/index')}}"><i class="icon icon-home"></i> <span>Bosh oyna</span></a>
        </li>
        <li class="{{($routeName=="admin/tests")? 'active':''}}">
            <a href="{{Url('admin/tests')}}"><i class="icon icon-signal"></i> <span>Testlar</span></a>
        </li>
        <li class="{{($routeName=="admin/users")? 'active':''}}">
            <a href="{{Url('admin/users')}}"><i class="icon icon-user"></i> <span>Foydalanuvchilar</span></a>
        </li>
        <li class="{{($routeName=="admin/balls")? 'active':''}}">
            <a href="{{Url('admin/balls')}}"><i class="icon icon-tint"></i> <span>Ball reyting</span></a>
        </li>
        {{--<li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>--}}
        {{--<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>--}}
            {{--<ul>--}}
                {{--<li><a href="form-common.html">Basic Form</a></li>--}}
                {{--<li><a href="form-validation.html">Form with Validation</a></li>--}}
                {{--<li><a href="form-wizard.html">Form with Wizard</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>--}}
        {{--<li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>--}}
        {{--<li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>--}}
            {{--<ul>--}}
                {{--<li><a href="index2.html">Dashboard2</a></li>--}}
                {{--<li><a href="gallery.html">Gallery</a></li>--}}
                {{--<li><a href="calendar.html">Calendar</a></li>--}}
                {{--<li><a href="invoice.html">Invoice</a></li>--}}
                {{--<li><a href="chat.html">Chat option</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>--}}
            {{--<ul>--}}
                {{--<li><a href="error403.html">Error 403</a></li>--}}
                {{--<li><a href="error404.html">Error 404</a></li>--}}
                {{--<li><a href="error405.html">Error 405</a></li>--}}
                {{--<li><a href="error500.html">Error 500</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="content"> <span>Monthly Bandwidth Transfer</span>--}}
            {{--<div class="progress progress-mini progress-danger active progress-striped">--}}
                {{--<div style="width: 77%;" class="bar"></div>--}}
            {{--</div>--}}
            {{--<span class="percent">77%</span>--}}
            {{--<div class="stat">21419.94 / 14000 MB</div>--}}
        {{--</li>--}}
        {{--<li class="content"> <span>Disk Space Usage</span>--}}
            {{--<div class="progress progress-mini active progress-striped">--}}
                {{--<div style="width: 87%;" class="bar"></div>--}}
            {{--</div>--}}
            {{--<span class="percent">87%</span>--}}
            {{--<div class="stat">604.44 / 4000 MB</div>--}}
        {{--</li>--}}
    </ul>
</div>
<!--sidebar-menu-->
