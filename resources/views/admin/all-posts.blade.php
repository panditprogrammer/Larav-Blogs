@extends('admin.layouts.main')


@push('title')
    <title>Admin - All Posts | {{ @config('constants.site_name') }} </title>
@endpush


@section('body-content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">

            @isset($success)
                @if ($success)
                    {!! '<div class="text-center alert bg-success text-white py-2">Post Updated successfully!</div>' !!}
                @else
                    {!! '<div class="text-center alert bg-danger  text-white py-2">Unable to update post!</div>' !!}
                @endif
            @endisset

            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">All Posts</h6>
                <a href="{{ url('/admin/add-post') }}">Add New Post</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">S.No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Post Slug</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Added On</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allPosts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td width="25%">{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>

                                <td> <img class="img-thumbnail" width="80px"
                                        src="{{ '/storage/blogs-images/' . $post->image }}" alt="" srcset=""></td>
                                <td>
                                    @if ($post->status)
                                        {{ 'Published' }}
                                    @else
                                        {{ 'Draft' }}
                                    @endif
                                </td>
                                <td>{{ $post->added_on }}</td>
                                <td><a class="btn btn-sm btn-info"
                                        href="{{ url("/admin/edit-post/{$post->id}") }}">Edit</a>
                                </td>
                                <td><a class="btn btn-sm btn-danger"
                                        href="{{ url("/admin/delete-post/{$post->id}") }}">Delete</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
