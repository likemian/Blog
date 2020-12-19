@extends('layouts.app')

@section('title', 'welcome')

@section('css')
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="top-container">
    <div class="circle-center-container">
        <div class="out-circle">
            <div class="in-circle"></div>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="top-title">
            <h1>才疏学浅</h2>
            <p id="top-subtitle">Sun, Moon, You</p>
        </div>
        <div class="follow-me">
            <div class="contact">
                <ul>
                    <li>
                        <a href="mailto: 18624269120@163.com">
                            <i class="ion-ios-mail"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/likemian/">
                            <i class="ion ion-logo-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-contact">
            <a class="nav-menu" href="blog">博客</a>
            <a class="nav-menu" href="life">随笔</a>
            <a class="nav-menu" href="xmind">思维导图</a>
            <a class="nav-menu" href="about">关于</a>
        </div>
    </div>
</div>
@endsection