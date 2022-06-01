@extends('admin.layouts.main')


@push('title')
    <title>Admin - Add Post | {{@config('constants.site_name')}} </title>
@endpush


@section('body-content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">

                    @isset($success)
                        @if ($success)
                            {!! '<div class="text-center alert bg-success text-white py-2">Post Added successfully!</div>' !!}
                        @else
                            {!! '<div class="text-center alert bg-danger  text-white py-2">Unable to add post!</div>' !!}
                        @endif
                    @endisset

                    <h6 class="mb-4">Add Post</h6>
                    <form action="{{ url('/admin/add-post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input  type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
                            <span class="text-danger py-2"> @error('title')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input  type="text" class="form-control" id="slug" name="slug" value="{{ old('slug')}}">
                            <span class="text-danger py-2"> @error('slug')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="short_desc" class="form-label">Short Description</label>
                            <input type="text" class="form-control" id="short_desc" name="short_desc"
                                value="{{ old('short_desc') }}">
                            <span class="text-danger py-2"> @error('short_desc')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="long_desc" class="form-label">Post</label>
                            <textarea name="long_desc" id="long_desc" cols="30" rows="10" class="form-control">{{ old('long_desc') }}</textarea>
                            <span class="text-danger py-2"> @error('long_desc')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label"> Image</label>
                            <input type="file" accept="image/*" name="image" id="image" class="form-control bg-dark">
                            <span class="text-danger py-2"> @error('image')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3" title="Click on right side for Date picker">
                            <label for="post_date" class="form-label"> Date</label>
                            <input type="date" name="post_date" id="post_date" class="form-control "
                                value="{{ old('post_date') }}">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="status" id="status">
                            <label class="form-check-label" for="status">Published</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Post</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Form End -->

@endsection
