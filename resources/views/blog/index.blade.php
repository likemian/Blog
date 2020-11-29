@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row just-content-center">
          <div class="card">
              <div class="card-header">文章列表</div>
              <table class="table table-hover table-bodered">
                  <thead class="bg-info">
                      <tr>
                          <th>文章标题</th>
                          <th>发布时间</th>
                          <th>相关操作</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($blogs as $blog)
                      <tr>
                          <td>{{ $blog->title }}</td>
                          <td>{{ $blog->create_at }}</td>
                          <td></td>
                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                      {{ $blogs->links() }}
                  </tfoot>
              </table>
          </div>
      </div>
  </div>
@endsection