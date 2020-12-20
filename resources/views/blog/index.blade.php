@extends('layouts.app')

@section('title', 'Blog')

@section('css')
<link href="{{ asset('css/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="content" class="main animated">
  <div class="header animated fadeInDown">
    <div class="site_title_container">
      <div class="site_title">
        <p class="sub_title">Sun, Moon, and You</p>
        <div class="description">
          <div style="font-family:'f2e6440e438bc3f239d0913db412467b0'" class="with_font">
          <h1><a href="/" class=""><img class="custom-header" src="images/logo.gif" alt=""></a></h1>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection