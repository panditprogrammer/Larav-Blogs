@extends('blog.layouts.main')

@push('title')
<title> {{$singleCustomPages[0]->name}} - {{$singleCustomPages[0]->title}} | {{@config('constants.site_name')}} </title>
@endpush


@section('body-content')

<!-- Page Header-->
<header class="masthead">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1> {{$singleCustomPages[0]->title}} </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
               <p>
                   {{ $singleCustomPages[0]->description }}
               </p>
            </div>
        </div>
    </div>
</main>

@endsection