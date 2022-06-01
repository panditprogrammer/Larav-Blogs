@extends('blog.layouts.main')
{{-- this is main body parser container --}}



@push('title')
    <title>{{ $singlePost[0]->title }} | {{ @config('constants.site_name') }} </title>
@endpush


@section('body-content')
    <!-- Page Header-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="post-heading">
                        <h1>{{ $singlePost[0]->title }}</h1>
                        <h2 class="subheading">{{ $singlePost[0]->short_desc }}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">Admin</a>
                            on {{ $singlePost[0]->post_date }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->

    <div class="container">
        <!-- side bar -->
        <div class="row">

            <div class="col-md-3 bg-light">
                <ul class="navbar-nav ms-auto py-4 py-lg-0" style="list-style: none">
                    @foreach ($allPosts as $post)
                        <li class="list-item">
                            <a href="{{ url("/post/{$post->slug}") }}">
                                {{ $post->title }}
                            </a>
                        </li>
                        <!-- Divider-->
                        <hr class="my-2" />
                    @endforeach
                </ul>
            </div>

            {{-- main post section --}}

            <div class="col-md-9">
                <a href="{{ '/storage/blogs-images/' . $singlePost[0]->image }}" target="blank">
                    <img class="img-fluid" src="{{ '/storage/blogs-images/' . $singlePost[0]->image }}" alt="..." />
                </a>
                <p>{{ $singlePost[0]->long_desc }}</p>
            </div>
        </div>
    </div>
@endsection
