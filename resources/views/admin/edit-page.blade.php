@extends('admin.layouts.main')


@push('title')
    <title>Admin - Edit Page | {{ @config('constants.site_name') }} </title>
@endpush

@section('body-content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">

                    <h6 class="mb-4">Update Page</h6>
                    <form action="{{ url('/admin/edit-page/') }}" method="POST">
                        @csrf
                        <input type="hidden" name="page_id" value="{{ $singlePage[0]->id }}">

                        <div class="mb-3">
                            <label for="name" class="form-label">Page Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $singlePage[0]->name }}">
                            <span class="text-danger py-2"> @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Short Description</label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                value="{{ $singlePage[0]->slug }}">
                            <span class="text-danger py-2"> @error('slug')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">page</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="form-control">{{ $singlePage[0]->description }}</textarea>
                            <span class="text-danger py-2"> @error('description')
                                    {{ $message }}
                                @enderror </span>
                        </div>

                        <div class="mb-3" title="Click on right side for Date picker">
                            <label for="page_date" class="form-label"> Date</label>
                            <input type="date" name="page_date" id="page_date" class="form-control"
                                value="{{ $singlePage[0]->page_date }}">
                        </div>

                        <div class="mb-3 form-check">

                            @if ($singlePage[0]->status)
                                {!! '<input type="checkbox" class="form-check-input" checked name="status" id="status">' !!}
                            @else
                                {!! '<input type="checkbox" class="form-check-input" name="status" id="status">' !!}
                            @endif

                            <label class="form-check-label" for="status">Published</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update page</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Form End -->
@endsection
