@extends('layouts.app')

@section('title', 'Blog')

@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/highlight.css') }}" rel="stylesheet">
@endsection

@section('content')
<button id="scroll-top"><span id="icon-arrow-up" class="fontello"></span></button>
<aside id="sidebar">
  <nav id="tags">
    <a href="/" id="avatar" style="background-image:url(/images/logo.gif)"></a>

    <ul id="tags__ul">
      <li id="pl__all" class="tags__li tags-btn active">所有文章</li>
        <li id="生活" class="tags__li tags-btn">生活</li>
        <li id="技术" class="tags__li tags-btn">技术</li>
    </ul>
  </nav> <!-- end #tags -->

  <div id="posts-list">
    <form action="" id="search-form">
      <a href="/index.html" id="mobile-avatar"></a>
      <input id="search-input" type="text" placeholder="站内搜索...">
    </form>

    <nav id="pl__container">
      @foreach($titles as $title)
      <a class="技术 pl__all" href="/blog?{{ $title->id }}"><span class="pl__circle"></span><span class="pl__title">{{ $title->title }}</span></a>
      @endforeach
    </nav>
  </div> <!-- end #posts-list -->
</aside> <!-- end #sidebar -->

<div id="post">
  <div id="pjax">
    <article id="post__content">
    <h1 id="post__title" data-identifier="{{ $blog->created_at }}">{{ $blog->title }}</h1>
    <div id="post__date">{{ $blog->created_at }}</div>
      @include('blog.explain')
      <div class="post__content">
      {{ $blog->content }}
      </div>
</article>
<!-- end #post__content -->
@include('layouts.footer')
@endsection