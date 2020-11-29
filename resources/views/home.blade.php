@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">welcome here</div>

                <div class="card-body">
                    读万卷书，行万里路

                    <a href="{{ route('blog.index') }}" class="btn btn-lg btn-block btn-primary">点击这里查看我的博客</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
