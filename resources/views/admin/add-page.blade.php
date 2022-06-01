@extends('admin.layouts.main')


@push('title')
    <title>Admin - Add Page | {{@config('constants.site_name')}} </title>
@endpush


@section('body-content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">

                    @isset($success)
                        @if ($success)
                            {!! '<div class="text-center alert bg-success text-white py-2">Page Added successfully!</div>' !!}
                        @else
                            {!! '<div class="text-center alert bg-danger  text-white py-2">Unable to add page!</div>' !!}
                        @endif
                    @endisset

                    <h6 class="mb-4">Add Page</h6>
                    <form action="{{ url('/admin/add-page') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            <span class="text-danger py-2"> @error('name')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Page Slug </label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                            <span class="text-danger py-2"> @error('slug')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Page title </label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            <span class="text-danger py-2"> @error('title')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="form-control">{{ old('description') }}</textarea>
                            <span class="text-danger py-2"> @error('description')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3" title="Click on right side for Date picker">
                            <label for="page_date" class="form-label"> Date</label>
                            <input type="date" name="page_date" id="page_date" class="form-control "
                                value="{{ old('page_date') }}">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="status" id="status">
                            <label class="form-check-label" for="status">Published</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Page</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Form End -->

@endsection
