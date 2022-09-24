@extends('layout.app')

@section('content')
    <!-- Post preview-->
    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
            <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
        </a>
        <p class="post-meta">
            Posted by
            <a href="#!">Start Bootstrap</a>
            on September 24, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4"/>
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
            →</a></div>
@endsection
