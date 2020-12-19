@extends('layouts.app')

@section('title', 'Blog')

@section('css')
<link href="{{ asset('css/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="cover-image-wrapper">
    <div class="cover-image"></div>
</div>
@endsection