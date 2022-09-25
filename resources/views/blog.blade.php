@extends('layout.app')

@section('heading')
    <div class="site-heading">
        <h1>Postingan Terbaru</h1>
        <span class="subheading">Dapatkan informasi terbaru dari Bintoro Corp Group yaitu Bintoro Interior, Pest, Build, Architects, Clean.</span>
    </div>
@endsection

@section('content')
    @foreach($blogs as $blog)
        <!-- Post preview-->
        <div class="post-preview">
            <a href="{{route('blog.detail', $blog->id)}}">
                <h2 class="post-title">{{$blog->title}}</h2>
                <h3 class="post-subtitle">{{$blog->description}}</h3>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#">{{$blog->user->name}}</a>
                on {{date('d F Y', strtotime($blog->created_at))}}
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4"/>
    @endforeach
    {{--    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts--}}
    {{--            →</a></div>--}}
@endsection
