@extends('layouts.app')

@section('title', 'Blog')

@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/highlight.css') }}" rel="stylesheet">
@endsection

@section('content')
<button id="js-fullscreen"><span id="icon-arrow" class="fontello"></span></button>
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
      <a class="技术 pl__all" href="/2020-04-14-database-backup-docker-image.html"><span class="pl__circle"></span><span class="pl__title">Database Backup/Restore Docker Image</span></a>
    
      <a class="生活 pl__all" href="/2020-04-12-newzealand-covid19-lockdown-week3.html"><span class="pl__circle"></span><span class="pl__title">新西兰居家隔离第三周</span></a>
    </nav>
  </div> <!-- end #posts-list -->
</aside> <!-- end #sidebar -->

<div id="post">
  <div id="pjax">
    <article id="post__content">
<h1 id="post__title" data-identifier="20190804">Proxy Protocol Demo of Nginx Ingress Controller in OpenStack Magnum Cluster</h1>
<div id="post__date">2019-08-04</div>
<declare id="declare" class="declare">
  <hr> 本博客所有文章采用的授权方式为
    <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.zh" target="_blank">
      <b>自由转载-非商用-非衍生-保持署名</b>
    </a>
  ，转载请务必注明出处，谢谢。<br><br>
  声明：<br>本博客欢迎转发，但请保留原作者信息!<br>新浪微博：<a href="/" target="_blank">@Lingxian_kong</a>;<br>博客地址：<a href="/" target="_blank">孔令贤的博客</a>;<br>微信公众号：飞翔的尘埃;<br>内容系本人学习、研究和总结，如有雷同，实属荣幸！
  <hr>
</declare>
<div class="post__content">
        <h3 id="问题描述">问题描述：</h3>

<p>在使用laravel框架时，本地环境mysql版本为8.0.17,</p>
<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>   mysql&gt; select version();
   +-----------+
   | version() |
   +-----------+
   | 8.0.17    |
   +-----------+
   1 row in set (0.00 sec)
</code></pre></div></div>
<p>运行程序后发现db连接不上，error log如下：</p>
<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>   SQLSTATE[HY000] [2054] The server requested authentication method unknown to the client (SQL: select * from information_schema.tables where table_schema = blog and table_name = migrations and table_type = 'BASE TABLE')
</code></pre></div></div>
<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>   PDOException::("PDO::__construct(): The server requested authentication method unknown to the client [caching_sha2_password]")
</code></pre></div></div>
<hr>

<h3 id="问题原因">问题原因：</h3>

<p>mysql在5.7以前的默认身份验证插件为<code class="language-plaintext highlighter-rouge">mysql_native_password</code>，但是升级到8.0.11更改为<code class="language-plaintext highlighter-rouge">caching_sha2_password</code> <a href="https://dev.mysql.com/doc/refman/8.0/en/caching-sha2-pluggable-authentication.html" target="_blank" style="font-size:20px;color:red">mysql更新文档</a></p>

<hr>

<h3 id="解决方案">解决方案：</h3>

<h4 id="网上的说法">网上的说法：</h4>

<ol>
  <li>修改mysql的密码认证（亲测可行）
    <div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>ALTER USER 'YOURUSERNAME'@'localhost' IDENTIFIED WITH mysql_native_password BY 'YOURPASSWORD';
</code></pre></div>    </div>
  </li>
  <li>修改laravel里的<code class="language-plaintext highlighter-rouge">config/database.php</code>里面mysql连接的<code class="language-plaintext highlighter-rouge">strict =&gt; false</code>（尝试了一下，不好用，原因未知）</li>
</ol>

<hr>

      </div>
</article>
<!-- end #post__content -->

<div id="post__toc-trigger">
  <div id="post__toc">
    <span id="post__toc-title">章节列表</span>
    <ul id="post__toc-ul"><li class="post__toc-li post__toc-h1"><a href="#post__title" class="js-anchor-link">Proxy Protocol Demo of Nginx Ingress Controller in OpenStack Magnum Cluster</a></li><li class="post__toc-li post__toc-h2"><a href="#ejsah" class="js-anchor-link">Why Proxy Protocol</a></li><li class="post__toc-li post__toc-h2"><a href="#erlrq" class="js-anchor-link">Why OpenStack Magnum</a></li><li class="post__toc-li post__toc-h2"><a href="#xtrkr" class="js-anchor-link">Demo</a></li></ul>
  </div>
</div>
</div>
@endsection