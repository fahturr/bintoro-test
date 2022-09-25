@extends('layout.app')

@section('heading')
    <div class="post-heading">
        <h1>{{$blog->title}}</h1>
        <h2 class="subheading">{{$blog->description}}</h2>
        <span class="meta">
            Posted by
            <a href="#!">{{$blog->user->name}}</a>
            on {{date('d F Y', strtotime($blog->created_at))}}
        </span>
    </div>
@endsection

@section('content')
    <p>{{$blog->content}}</p>
@endsection
