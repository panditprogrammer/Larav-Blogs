@extends('blog.layouts.main')
{{-- this is main body parser container --}}



@push('title')
    <title>Contact - {{ @config('constants.site_name') }} </title>
@endpush


@section('body-content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('/blog-assets/assets/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            @isset($res)
                @if ($res)
                    {!! '<div class="text-center alert bg-success text-white py-2">Message Sent!</div>' !!}
                @else
                    {!! '<div class="text-center alert bg-danger  text-white py-2">Unable To Send Message!</div>' !!}
                @endif
            @endisset
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                        as possible!</p>
                    <div class="my-5">

                        <form id="contactForm" method="POST" action="{{ url('/contact') }}">
                            @csrf
                            <div class="form-floating">
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Enter your name..."  value="{{ old('name') }}" />
                                <label for="name">Name</label>
                                <span class="text-danger py-2"> @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="Enter your email..."  value="{{ old('email') }}" />
                                <label for="email">Email address</label>
                                <span class="text-danger py-2"> @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="mobile" name="mobile" type="tel"
                                    placeholder="Enter your Phone number..."  value="{{ old('mobile') }}" />
                                <label for="mobile">Phone Number</label>
                                <span class="text-danger py-2"> @error('mobile')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..."
                                    style="height: 12rem" >{{ old('message') }}</textarea>
                                <label for="message">Message</label>
                                <span class="text-danger py-2"> @error('message')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <br />

                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
